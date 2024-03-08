<?php

namespace App\Http\Controllers;

use App\Models\Vol;
use App\Http\Requests\StoreVolRequest;
use App\Http\Requests\UpdateVolRequest;
use Illuminate\Http\Request;
class VolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voles=Vol::paginate(10);
        return view('pages.voles', compact('voles'));
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
    public function store(StoreVolRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        
        $id = (int)$request->id;
        $volles=Vol::findOrFail($id);
         return view('pages.showVoles' ,compact('volles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vol $vol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVolRequest $request, Vol $vol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vol $vol)
    {
        //
    }
}
