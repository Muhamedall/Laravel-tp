<?php

namespace Database\Seeders;

use App\Models\Airport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AirportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    ##$faker = Faker\Factory::create('fr_FR');

    public function run(): void
    {
        
        Airport::factory(20)->create();
        
    }
}
