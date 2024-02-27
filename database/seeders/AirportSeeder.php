<?php

namespace Database\Seeders;

use App\Models\Airport;
use App\Models\Vol;
use Illuminate\Database\Seeder;

class AirportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    ##$faker = Faker\Factory::create('fr_FR');

    public function run(): void
    {
        
        Airport::factory(20)->create()->each(function($airp){
            Vol::factory(5)->create(["airport_depart_id" => $airp->id,
                                     "airport_arrivee_id" => Airport::factory()->create()->id]);
        });
        
    }
}
