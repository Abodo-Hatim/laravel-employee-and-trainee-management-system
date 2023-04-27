<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employe>
 */
class EmployeFactory extends Factory
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
            'matricule'=>fake()->numberBetween(),
            'departement'=>'service reseau',
            'date_recrutement'=>fake()->dateTime(),
            'tele'=>fake()->numberBetween(),
            'adresse'=>fake()->address(),
            'ville'=>fake()->city(),
        ];
    }
}
