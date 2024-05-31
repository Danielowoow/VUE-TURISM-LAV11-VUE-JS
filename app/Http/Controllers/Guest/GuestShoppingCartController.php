<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Response;
use Inertia\Inertia;

class GuestShoppingCartController extends Controller
{
    public function index()
    {
        // Obtener todos los datos almacenados en Redis
        $redisData = Redis::connection()->hgetall('my_cart_data');

        // Convertir los datos de Redis a un array asociativo
        $cartData = [];
        foreach ($redisData as $key => $value) {
            $cartData[$key] = json_decode($value, true);
        }

        // Pasar los datos recuperados a la vista
        return Inertia::render('public/cart/index', [
            'cartData' => $cartData
        ]);
    }

    public function addToCart(Request $request)
    {
        $tour = $request->input('tour');

        // Generar una clave única para el tour en Redis (puedes ajustar esta lógica según tus necesidades)
        $tourKey = 'tour_' . $tour['id'];

        // Agregar el tour al carrito en Redis
        Redis::connection()->hmset('my_cart_data', [
            $tourKey => json_encode($tour)
        ]);

        // Respondemos con un mensaje JSON indicando que el tour se ha agregado al carrito correctamente
        return Response::json(['message' => 'El tour se ha agregado al carrito correctamente.']);
    }
}



