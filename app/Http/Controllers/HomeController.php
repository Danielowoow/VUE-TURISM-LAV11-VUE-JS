<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Tour;

class HomeController extends Controller
{ 

    public function __invoke()
    {
        //nos retorna todos los tours
        //$tours = Tour::all();

        $tours = Tour::where('estatus', '1')->latest('id')->take(2)->get();
        //return $tours;



        




        return view('public.home.home', compact('tours'));
    }

}
