<?php

namespace App\Http\Controllers;
use App\models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartmentsController extends Controller
{
    //
    public function _construct()
    {

    }

    public function getDepartment()
    {
        return Department::get();
    }

    public function create()
    {
        return view('departments.create');
    }


    public function store(Request $request)
    {
        //validate data before insert to database
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100|unique:offers,name',
            'task' => 'required|max:100',
            'manager' => 'required',
        ]);
        if ($validator->fails()) {
            return $validator->errors()->first();
        }

        //insert
        department::create([
            'name' => $request->name,
            'task' => $request->task,
            'manager' => $request->manager,
        ]);
        return 'saved successfuly';
//       return view('offers.store');
    }
}