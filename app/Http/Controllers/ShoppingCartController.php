<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Obtener los datos del carrito desde la sesión
        $carrito = $request->session()->get('carrito', []);

        // Devolver la vista del carrito con los datos del carrito
        return view('public.cart.index', compact('carrito'));
    }
    
    /**
     * Agregar un elemento al carrito.
     */
    public function agregar(Request $request)
    {
        // Obtener los datos enviados desde el formulario
        $tourId = $request->input('tour_id');
        $tourTitle = $request->input('tour_title');
        $tourPrecio = number_format($request->input('tour_precio'), 2); // Formatear el precio con dos decimales
        $fecha = $request->input('tour_fecha'); // Utilizamos el nombre correcto del campo de fecha
        $participantes = $request->input('tour_participantes'); // Utilizamos el nombre correcto del campo de participantes

        // Almacenar los datos en la sesión
        $carrito = $request->session()->get('carrito', []);
        $carrito[] = [
            'tour_id' => $tourId,
            'tour_title' => $tourTitle,
            'tour_precio' => $tourPrecio,
            'fecha' => $fecha,
            'participantes' => $participantes,
        ];
        $request->session()->put('carrito', $carrito);

        // Redirigir a la vista del carrito
        return redirect()->route('carrito.index');
    }
    

    public function eliminar(Request $request)
    {
        // Obtener el índice del elemento a eliminar
        $index = $request->input('index');

        // Obtener los datos del carrito desde la sesión
        $carrito = $request->session()->get('carrito', []);

        // Eliminar el elemento del carrito utilizando el índice
        unset($carrito[$index]);

        // Actualizar los datos del carrito en la sesión
        $request->session()->put('carrito', $carrito);

        // Devolver una respuesta exitosa
        return response()->json(['message' => 'Elemento eliminado correctamente'], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
