<?php

namespace App\Http\Controllers;

use App\Http\Requests\CrudRequest;
use App\Models\Employee;
use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    // atributos
    protected $models = [
        'school'=>School::class, 
        'employee' => Employee::class, 
        'user'=> User::class
    ];

    // funciones
    public function index(Request $request){
        $class = substr(request()->segment(1), 0, -1);
        $model = $this->models[$class];
        if(empty($request->search) || $request->search == ''){
            $collection = $model::latest()->paginate(10);
        }
        else{
            $collection = $model::where("name", "LIKE", "%{$request->search}%")->latest()->paginate(10);
        }

        return view('crud.index', compact('collection', 'class'));
    }

    public function show($obj){
        $class = substr(request()->segment(1), 0, -1);
        $obj = $this->models[$class]::find($obj);
        switch ($class){
            case 'school':
                return SchoolController::show($obj); break;
            case 'employee':
                return EmployeeController::show($obj); break;
            default:
                return abort(404);
        }
    }

    // raro que funcione con School
    public function create(School $obj){
        return view('crud.create', compact('obj'));
    }

    public function store(CrudRequest $request){
        $class = substr(request()->segment(1), 0, -1);
        $model = $this->models[$class];
        $obj = $model::create($request->all());

        return redirect()->route($class.'.edit', compact('obj'));
    }

    public function edit($obj){
        $class = substr(request()->segment(1), 0, -1);
        $obj = $this->models[$class]::find($obj);
        return view('crud.edit', compact('obj', 'class'));
    }

    public function update(CrudRequest $request, $obj){
        $class = substr(request()->segment(1), 0, -1);
        $obj = $this->models[$class]::find($obj);
        $obj->update($request->all());
        return redirect()->route($class.'.edit', compact('obj'));
    }

    public function destroy($obj){
        $class = substr(request()->segment(1), 0, -1);
        $obj = $this->models[$class]::find($obj);
        $obj->delete();
        return back();
    }
}
