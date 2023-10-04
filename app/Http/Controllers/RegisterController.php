<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function store(Request $request){
        $viewData = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'contact_number' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        $user = User::create($viewData);

        return redirect()->route('admin.dashboard');
    }
}
