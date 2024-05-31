<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Log;


use App\Models\Subscriber;
use App\Models\User;




class GuestSubscriberController extends Controller
{
    public function store(Request $request)
    {
        $key = $this->throttleKey($request);

        //cambiar el numero de acuerdo a lo que espere en este caso es 3 intentos por minuto
        if (RateLimiter::tooManyAttempts($key, 3)) {
            return back()->withErrors(['error' => 'Too many attempts. Please try again in a minute.']);
        }

        $validated = $this->validateRequest($request);

        list($isClient, $clientSince) = $this->checkIfUserExists($validated['email']);

        $this->createSubscriber($validated, $isClient, $clientSince);

        RateLimiter::hit($key, 60);

        return back()->with('success', 'You have successfully subscribed.');
    }
    protected function validateRequest(Request $request)
    {
        return $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z\s]+$/', // Solo permite caracteres alfabéticos y espacios
            ],
            'email' => [
                'required',
                'email:rfc,dns', // Valida el formato del correo y comprueba el dominio DNS
                'unique:subscribers,email',
            ],
        ]);
    }

    // si hay errores habilitaar este de acá abajo y el de arriba inabilitaar

    // protected function validateRequest(Request $request)
    // {
    //     return $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|unique:subscribers,email',
    //     ]);
    // }

    protected function checkIfUserExists($email)
    {
        $user = User::where('email', $email)->first();

        if ($user) {
            return [true, $user->created_at];
        }

        return [false, null];
    }

    protected function createSubscriber($validated, $isClient, $clientSince)
    {
        Subscriber::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subscribed_at' => now(),
            'is_client' => $isClient,
            'client_since' => $clientSince,
        ]);
    }
    protected function throttleKey(Request $request)
    {
        return $request->ip();
    }


}
