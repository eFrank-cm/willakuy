<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = ['docente', 'administrativo', 'cas', 'pec'];
        $subtype = ['auxiliar', 'directivo', 'docente', 'especialista', 'funcionario'];
        $schools = \App\Models\School::pluck('id')->toArray();

        return [
            'code' => fake()->unique()->randomNumber(5, true),
            'type' => fake()->randomElement($type),
            'subtype' => fake()->randomElement($subtype),
            'function' => fake()->jobTitle(),
            'description' => fake()->text(),
            'school_id' => fake()->randomElement($schools)
        ];
    }
}
