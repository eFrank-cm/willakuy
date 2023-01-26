<?php

namespace App\Http\Controllers;

use App\Models\Employee;

class EmployeeController extends Controller
{
    static function show(Employee $obj){
        return view('employee.oneEmployee', ['employee' => $obj]);
    }
}
