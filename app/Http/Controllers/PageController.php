<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function contact()
    {
        return view('public.contact.index');
    }

    public function about()
    {
        return view('public.about.index');
    }

    public function terms()
    {
        return view('public.terms.index');
    }
}
