<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;

class AdminTourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Determine the number of rows per page from the request, default to 10
        $perPage = $request->input('rows', 10);
    
        // Fetch all tours with specific fields and paginate them
        $tours = Tour::select('id','precio', 'imagen', 'title', 'idioma', 'hora_inicio', 'hora_fin', 'created_at', 'updated_at', 'estatus')
                     ->paginate($perPage);
    
        // Return the index view with the tours data and the current per page
        return view('admin.tours.index', ['tours' => $tours]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //retorna la vista de creacion de tours
        return view('admin.tours.create');

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
    public function show(Tour $tour)
    {
        //retorna la vista de un tour en especifico
        return view('admin.tours.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour)
    {
        //retorna la vista de edicion de tours
        return view('admin.tours.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tour $tour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tour)
    {
        //
    }
}
