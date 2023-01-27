<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Database\Eloquent\Builder;

class SchoolController extends Controller
{
    static function show(School $school){
        $jobs = $school->jobs()->whereRelation('works', 'archived', false)->get();
        // dd($school);
        $jobs_free = $school->jobs()->whereDoesntHave('works', function(Builder $query){
            $query->where('archived', false);
        })->get();
        return view('school.oneSchool', compact('school', 'jobs', 'jobs_free'));
    }
}
