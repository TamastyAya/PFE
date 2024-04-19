<?php

namespace Database\Factories;

use App\Models\Module;
use App\Models\Version;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class VersionFactory extends Factory
{
    protected $model = Version::class;

    public function definition()
    {
        // Get random module ID from existing modules
        $moduleId = Module::inRandomOrder()->value('idServeur');

        return [
            'numVersion' => $this->faker->randomNumber(),
            'dateVersion' => $this->faker->date(),
            'idModule' => $moduleId,
        ];
    }
}
