<?php

namespace Database\Factories;

use App\Models\Serveur;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServeurFactory extends Factory
{

    public function definition()
    {
        return [
            'dbName' => fake()->name(),
            'adresseIP' => fake()->randomNumber(),
            'type' =>fake()->name(),
        ];
    }
}
