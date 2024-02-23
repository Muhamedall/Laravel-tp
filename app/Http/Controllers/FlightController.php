<?php

namespace App\Http\Controllers;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{

    public function index()
    {
        $flights = Flight::all();

        return view('flights', compact('flights'));
    }

 
    // Add other controller methods as needed

}
