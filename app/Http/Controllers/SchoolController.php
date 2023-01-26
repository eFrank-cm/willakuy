<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchoolRequest;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SchoolController extends Controller
{
    static function show(School $obj){
        return view('school.oneSchool', ['school' => $obj]);
    }
}
