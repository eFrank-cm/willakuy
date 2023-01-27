<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schools = School::factory(15)->create();

        foreach($schools->random(10) as $school){
            Job::factory(5)->create([
                'school_id' => $school->id
            ]);

        }
    }
}
