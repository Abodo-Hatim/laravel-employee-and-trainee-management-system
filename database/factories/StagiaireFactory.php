<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stagiaire>
 */
class StagiaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nom'=>fake()->firstName(),
            'prenom'=>fake()->lastName(),
            'filiere'=>'Web Full Stack',
            'tele'=>fake()->numberBetween(),
            'adresse'=>fake()->address(),
            'ville'=>fake()->city(),
        ];
    }
}
