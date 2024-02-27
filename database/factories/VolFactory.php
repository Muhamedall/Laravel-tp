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
    public function definition(): array
    {
        return [
            "airport_depart_id" => Airport::all()->random()->id,
            "airport_arrivee_id" => Airport::all()->random()->id,
            'date_depart'=> fake()->date(),
            'date_arrivee'=> fake()->date()
        ];
    }
}
