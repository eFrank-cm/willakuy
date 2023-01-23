<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchoolRequest;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SchoolController extends Controller
{
    public function index(Request $request){
        if(empty($request->search) || $request->search==''){
            $schools = School::latest()->paginate(10);
        }
        else{
            $schools = School::where("name", "LIKE", "%{$request->search}%")->latest()->paginate(10);
        }

        return view('school.anySch', compact('schools'));
    }

    public function show(School $obj){
        return view('school.oneSch', ['school'=>$obj]);
    }

    public function create(School $obj){
        return view('crud.create', compact('obj'));
    }

    public function store(SchoolRequest $request){
        $obj = School::create(array_merge(
            $request->all(), 
            ['slug'=>Str::slug($request->mod_code)])
        );

        return redirect()->route('school.edit', compact('obj'));
    }

    public function edit(School $obj){
        return view('crud.edit', compact('obj'));
    }

    public function update(SchoolRequest $request, School $obj){
        $obj->update(array_merge(
            $request->all(), 
            ['slug'=>Str::slug($request->mod_code)])
        );
        return redirect()->route('school.edit', compact('obj'));
    }

    public function destroy(School $obj){
        $obj->delete();
        return back();
    }
}
