<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Airport;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vol>
 */
class VolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(){


    
 
    $airportDepartId = Airport::all()->random()->id;
        return [
              

            "airport_depart_id"=>$airportDepartId,
            "airport_arrivee_id" => Airport::where("id", "!=" ,$airportDepartId),
            'date_depart'=> fake()->date(),
            'date_arrivee'=> fake()->date()
        ];
    
}


}