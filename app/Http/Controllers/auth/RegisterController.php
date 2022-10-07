<?php

namespace App\Http\Controllers\auth;

// built in
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

// models
use App\Models\User;


class RegisterController extends Controller
{
    public function create(){
        return view('pages.auth.register');
    }

    public function store(){
        $attributes = request()->validate([
            'username' => ['required','string','min:6'],
            'email' => ['required','email','unique:users'],
            'password' => ['required','min:6']
        ]);

        if(request()->password !== request()->password_confirm){
            throw ValidationException::withMessages([
                'error' => "passwords doesn't match"
            ]);
        }

        auth()->login(User::create($attributes));

        return redirect('/home');
    }
}
