<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class TourController extends Controller
{
    public function index()
    {
        return view('public.tours.index');
    }


    //acá se mostrarán los tours
    public function show($id, $slug)
    {
        $tour = Tour::with(['itineraries', 'included_services', 'excluded_services','restrictions','faqs'])->findOrFail($id);
    
        if ($tour->slug !== $slug) {
            return redirect()->route('tours.show', ['id' => $tour->id, 'slug' => $tour->slug]);
        }
    
        return view('public.tours.show', [
            'tour' => $tour,
            'itineraries' => $tour->itineraries,
            'includedServices' => $tour->included_services,
            'excludedServices' => $tour->excluded_services,
            'restrictions' => $tour->restrictions,
            'faqs' => $tour->faqs
        ]);
    }
    
}
