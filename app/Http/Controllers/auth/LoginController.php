<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create(){
        return view('pages.auth.login');
    }

    public function store(){
        $attributes = request()->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }

        return redirect('/main')->with('success', 'Welcome Back!');
    }
}
