<?php

namespace App\Http\Controllers\auth;

// built in
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

// models
use App\Models\User;

class AuthController extends Controller
{
    public function viewRegister(){
        return view('pages.auth.register');
    }

    public function register(){
        $attributes = request()->validate([
            'username'  => ['required','string','min:6'],
            'email'     => ['required','email','unique:users'],
            'password'  => ['required','min:6']
        ]);

        if(request()->password !== request()->password_confirm){
            throw ValidationException::withMessages([
                'error' => "passwords doesn't match"
            ]);
        }

        auth()->login(User::create($attributes),request()->remember_me);

        return redirect('/home');
    }

    public function viewLogin(){
        return view('pages.auth.login');
    }

    public function login(){
        $attributes = request()->validate([
            'email'     => ['required','email'],
            'password'  => ['required']
        ]);

        if (!auth()->attempt($attributes,request()->remember_me)) {
            throw ValidationException::withMessages([
                'error' => 'Your provided credentials could not be verified.'
            ]);
        }

        return redirect('/home');
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/login');
    }
}
