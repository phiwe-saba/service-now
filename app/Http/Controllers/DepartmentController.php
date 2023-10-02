<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        return view('admin.department.index');
    }

    public function create(){
        return view('admin.department.create');
    }

    public function store(Request $request){
        $viewData = $request->validate([
            'dep_name' => 'required'
        ]);

        $department = Department::create($viewData);

        return redirect()->route('admin.department.index')->with('success', 'Successfully added');
    }
}
