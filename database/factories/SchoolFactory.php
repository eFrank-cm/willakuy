<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\School>
 */
class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $level = ['secundaria', 'primaria', 'inicial'];
        $type = ['multigrado', 'polidocente', 'unidocente'];
        $province = ['canchis', 'canas', 'acomayo'];
        $district = ['sicuani', 'checacupe', 'combapata', 'marangani', 'pitumarca', 'san pablo', 'san pedro', 'tinta'];
        $zone = ['rural 1', 'rural 2', 'rural 3', 'urbana'];

        return [
            'mod_code' => $mod_code = fake()->unique()->numberBetween(1000, 9999),
            'number' => fake()->unique()->numberBetween(500000, 600000),
            'name'=> fake()->company(),
            'level' => fake()->randomElement($level),
            'type' =>  fake()->randomElement($type),
            'province' => fake()->randomElement($province),
            'district' => fake()->randomElement($district),
            'zone' => fake()->randomElement($zone),
            'address' => fake()->address()
        ];
    }
}
