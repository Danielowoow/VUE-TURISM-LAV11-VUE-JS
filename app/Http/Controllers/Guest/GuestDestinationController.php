<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Inertia\Inertia;


use App\Models\Destination;

class GuestDestinationController extends Controller
{
    public function index()
    {

        $destination = Destination::paginate(1000);

        return Inertia::render('public/destinations/Index', [
            'tours' => $destination
        ]);

    }

}
