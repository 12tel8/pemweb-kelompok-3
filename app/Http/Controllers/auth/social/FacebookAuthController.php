<?php

namespace App\Http\Controllers\auth\social;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

use App\Models\User;

class FacebookAuthController extends Controller
{
    function redirect(){
        return Socialite::driver('facebook')->stateless()->redirect();
    }

    function callback(){
        $user = Socialite::driver('facebook')->stateless()->user();
        $finduser = User::where('provider_id', $user->id)->first();
        
        if($finduser){
            auth()->login($finduser);
            return redirect('main');
        }else{
            $newUser = User::create([
                'username' => $user->name,
                'email' => $user->email,
                'password' => bcrypt($user->id),
                'social_provider' => 'facebook',
                'provider_id' => $user->id
            ]);
    
            auth()->login($newUser);
            return redirect('main');
        }
    }
}
