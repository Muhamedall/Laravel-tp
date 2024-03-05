<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Http\Requests\StoreAirportRequest;
use App\Http\Requests\UpdateAirportRequest;
use Illuminate\Http\Request;



class AirportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $airports = Airport::paginate(10);
        return view('pages.airports', compact('airports'));
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
    public function store(StoreAirportRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
    
        $id = (int)$request->id;
         $air=Airport::findOrFail($id);
         /*
         la defference entre find est findOrFaill 
         * find() -> fach chi element machi oblige ykon 
         * findOrfaill ->fach oblige ykon 3ndna chi element + ila mal9atouch katla3 lik exption error pardefaut 
          bla mathtj dir condition 
         
         
         */
         /*
         1 )fach kankhdmo b find bohdha ila bghina kanzido had l exeption 
         // pour Gere les exption
         if($air === NULL){
            return abort(404);
         }*/
     
        return view('pages.showAirport' ,compact('air'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Airport $airport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAirportRequest $request, Airport $airport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Airport $airport)
    {
     
    }
}
