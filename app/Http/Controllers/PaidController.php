<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaidController extends Controller
{
    public function izipay(Request $request)
    {
        if ($request->get('kr-hash-algorithm') !== 'sha256_hmac') {
            throw new \Exception('Invalid hash algorithm');
        };
        $krAnswer = str_replace('\/', '/', $request->get('kr-answer'));

        $calculatedHash = hash_hmac('sha256', $krAnswer, config('services.izipay.hash_key'));


        if ($calculatedHash !== $request->get('kr-hash')) {
            throw new \Exception('Invalid hash');
        }
        // Decodificar la respuesta
        $paymentDetails = json_decode($krAnswer, true);
        //return $request->all();
        //si llega hasta aqui, la transaccion es valida
        return view('client.success.transaction_success', ['paymentDetails' => $paymentDetails]);
        //return view('client.success.transaction_success');





    }
}
