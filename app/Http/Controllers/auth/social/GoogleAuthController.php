<?php

namespace App\Http\Controllers\auth\social;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;

use App\Models\User;

class GoogleAuthController extends Controller
{
    function redirect(){
        return Socialite::driver('google')->redirect();
    }

    function callback(){
        $user = Socialite::driver('google')->user();
        $finduser = User::where('google_id', $user->id)->first();
        
        if($finduser){
            auth()->login($finduser);
            return redirect()->intended('main');
        }else{
            $newUser = User::create([
                'username' => $user->name,
                'email' => $user->email,
                'google_id'=> $user->id,
                'password' => bcrypt('123456')
            ]);
    
            auth()->login($newUser);
            return redirect()->intended('main');
        }
    }
}
