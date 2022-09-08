<?php

namespace App\Http\Controllers\auth;

// built in
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// models
use App\Models\User;


class RegisterController extends Controller
{
    public function create(){
        return view('pages.auth.register');
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required','string','min:3'],
            'email' => ['required','email'],
            'password' => ['required','min:6']
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->name)
        ]);
    }
}
