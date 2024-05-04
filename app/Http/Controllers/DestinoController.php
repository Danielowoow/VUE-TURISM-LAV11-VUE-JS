<?php

namespace App\Http\Controllers;


use App\Models\Destination;
use Illuminate\Http\Request;


class DestinoController extends Controller
{
    public function index()
    {
        return view('public.destinos.index');
    }
    public function show($id, $slug = null)
    {
        $destino = Destination::findOrFail($id);
        return view('public.destinos.show', compact('destino'));
    }
}
