<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avion;
class Avioncontrol extends Controller
{
    public function index(){
        $avions=Avion::all();
        return view('components.avions' , compact('avions'));
    }
}
