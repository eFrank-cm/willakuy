<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    public function index(Request $request){
        if(empty($request->search) || $request->search==''){
            $employees = Employee::latest()->paginate(10);
        }
        else{
            $employees = Employee::where("name", "LIKE", "%{$request->search}%")->latest()->paginate(10);
        }

        return view('employee.anyEmp', compact('employees'));
    }

    public function show(Employee $obj){
        return view('employee.oneEmp', ['employee'=>$obj]);
    }

    public function create(Employee $obj){
        return view('crud.create', compact('obj'));
    }

    public function edit(Employee $obj){
        return view('crud.edit', compact('obj'));
    }

    public function update(Request $request, Employee $obj){
        $obj->update(array_merge(
            $request->all(), 
            ['slug'=>Str::slug($request->mod_code)])
        );
        return redirect()->route('employee.edit', compact('obj'));
    }

    public function destroy(Employee $obj){
        $obj->delete();
        return back();
    }
}
