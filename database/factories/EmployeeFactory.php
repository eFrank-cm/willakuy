<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'dni' => fake()->unique()->randomNumber(8, true),
            'name' => fake()->firstName(),
            'last_names' => fake()->lastName()." ".fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'mobile_num' => fake()->unique()->phoneNumber(),
            'edu_level' => 'universitaria', 
            'profession' => 'docente', 
            'specialty' => 'educacion primaria',
            'degree' => 'licenciatura',
            'study_center' => fake()->randomElement(['UNSAAC', 'UNSA', 'UNA']),
            'mention' => fake()->text(),
            'slug'=> fake()->unique()->randomNumber(6, True)
        ];
    }
}
