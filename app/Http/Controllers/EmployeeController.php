<?php

namespace App\Http\Controllers;

use App\Models\Employee;

class EmployeeController extends Controller
{
    static function show(Employee $employee){
        return view('employee.oneEmployee', compact('employee'));
    }

    
}
