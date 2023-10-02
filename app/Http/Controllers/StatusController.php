<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index(){
        return view('admin.status.index');
    }

    public function create(){
        return view('admin.status.create');
    }

    public function store(Request $request){
        $viewData = $request->validate([
            'status_name' => 'required'
        ]);

        $status = Status::create($viewData);

        return redirect()->route('admin.status.index')->with('success', 'Successfully added');
    }
}
