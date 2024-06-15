<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Response;
use Inertia\Inertia;

class GuestShoppingCartController extends Controller
{
    // index: Recupera y muestra los datos del carrito.
    // addToCart: Agrega un tour al carrito.
    // removeFromCart: Elimina un tour del carrito.
    // updateCart: Actualiza la información de un tour en el carrito.
    // clearCart: Vacía todo el carrito.
    // getCartTotal: Calcula y devuelve el total del carrito.
    
    public function index()
    {
        // Obtener todos los datos almacenados en la sesión
        $cartData = session()->get('cart', []);

        // Pasar los datos recuperados a la vista
        return Inertia::render('public/cart/index', [
            'cartData' => $cartData
        ]);
    }

    public function addToCart(Request $request)
    {
        $tour = $request->input('tour');
        $tourId = $tour['id'];

        // Obtener el carrito actual de la sesión
        $cart = session()->get('cart', []);

        // Agregar el tour al carrito
        $cart[$tourId] = $tour;

        // Guardar el carrito actualizado en la sesión
        session(['cart' => $cart]);

        // Respondemos con un mensaje JSON indicando que el tour se ha agregado al carrito correctamente
        return Response::json(['message' => 'El tour se ha agregado al carrito correctamente.']);
    }
}