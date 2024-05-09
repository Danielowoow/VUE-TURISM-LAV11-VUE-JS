<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GuestTourController extends Controller
{
    public function index()
    {
        
        // Obtener los tours ordenados por título
        $tours = Tour::orderBy('title')->get();

        // Mapear los tours en el formato deseado
        $formattedTours = $tours->map(function ($tour) {
            return [
                'id' => $tour->id,
                'title' => $tour->title,
                'description_corta' => $tour->description_corta,
                'duracion_horas' => $tour->duracion_horas,
                'hora_inicio' => $tour->hora_inicio,
                'hora_fin' => $tour->hora_fin,
                'max_personas' => $tour->max_personas,
                'min_personas' => $tour->min_personas,
                'idioma' => $tour->idioma,
                'precio' => $tour->precio,
            ];
        });

        // Pasar los datos a la vista
        return Inertia::render('public/tours/index', [
            'tours' => $formattedTours,
        ]);
    }

    public function show(Request $request)
    {
        // Obtener el ID del tour desde la solicitud GET
        $id = $request->input('id');
    
        // Obtener el tour por su ID
        $tour_show = Tour::findOrFail($id);
    
        // Pasar los datos del tour a la vista
        return Inertia::render('public/tours/show', [
            'tour_detalles' => [
                'title' => $tour_show->title,
                'description_corta' => $tour_show->description_corta,
                'duracion_horas' => $tour_show->duracion_horas,
                'hora_inicio' => $tour_show->hora_inicio,
                'hora_fin' => $tour_show->hora_fin,
                'max_personas' => $tour_show->max_personas,
                'min_personas' => $tour_show->min_personas,
                'idioma' => $tour_show->idioma,
                'precio' => $tour_show->precio,
            ],
        ]);
    }
    
    

}
