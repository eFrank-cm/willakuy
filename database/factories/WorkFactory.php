<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Work>
 */
class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $condition = ['contratado', 'designado', 'encargado', 'nombrado'];

        return [
            'quality' => fake()->randomElement($condition),
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
            'employee_id' => Employee::all()->random()->id,
            'job_id' => Job::all()->random()->id,
            'archived' => fake()->boolean(),
            'reason' => fake()->text()
        ];
    }
}
