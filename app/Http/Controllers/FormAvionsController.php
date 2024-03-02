<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avion;

class FormAvionsController extends Controller
{


   
    public function create(Request $request){
        //  $libely = $request->input('libely');
          //$capacity =$request->input('capacity');
          //Avions::create(["libelle"=>$libely,"capacite"=>$capacity]);
          Avion::create($request->all());
          return Redirect("/avions");
         
      }



    public function delete($id)
    {
        $avion = Avion::findOrFail($id);
        $avion->delete();

        return redirect()->back()->with('success', 'Avion deleted successfully');
    }
}
