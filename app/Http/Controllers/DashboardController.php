<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index()
    {

        $formToken = $this->generateFormToken();
    //return $formToken;



        return view('client.dashboard', compact('formToken'));
    }

    private function generateFormToken(){
        $auth = base64_encode(config('services.izipay.client_id') . ':' . config('services.izipay.client_secret'));

        $response = Http::withHeaders([
            'Authorization' => "Basic $auth",
            'Content-Type' => 'application/json',
        ])->post(config('services.izipay.url'),
        [
            'amount' => '10000',
            'currency' => 'USD',
            'order_id' => Str::random(10),
            'customer' => [
                'email' => auth()->user()->email,
            ]


        ])->json();
        //return $response;   
        return $response['answer']['formToken'];
        
    }
}
