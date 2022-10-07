<?php

namespace App\Http\Controllers\auth\social;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

use App\Models\User;

class GoogleAuthController extends Controller
{
    function redirect(){
        return Socialite::driver('google')->redirect();
    }

    function callback(){
        $user = Socialite::driver('google')->user();
        $finduser = User::where('provider_id', $user->id)->first();
        
        if($finduser){
            auth()->login($finduser);
            return redirect('home');
        }else{
            $newUser = User::create([
                'username' => $user->name,
                'email' => $user->email,
                'password' => bcrypt($user->id),
                'social_provider' => 'google',
                'provider_id' => $user->id
            ]);
    
            auth()->login($newUser);
            return redirect('home');
        }
    }
}
