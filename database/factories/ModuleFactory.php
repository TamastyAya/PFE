<?php

namespace Database\Factories;

use App\Models\Module;
use App\Models\Serveur;
use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

class ModuleFactory extends Factory
{
    protected $model = Module::class;

    public function definition()
    {
        // Get random server ID from existing servers
        $serverId = Serveur::inRandomOrder()->value('idServeur');

        return [
            'nomModule' => $this->faker->name(),
            'idServeur' => $serverId,
        ];
    }
}
