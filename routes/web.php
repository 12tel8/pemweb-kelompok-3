<?php

use Illuminate\Support\Facades\Route;

// auth Controller
use App\Http\Controllers\auth ; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('register',[auth\RegisterController::class , 'create'])->name('register');
Route::post('register',[auth\RegisterController::class , 'store'])->name('register');

Route::get('login',[auth\LoginController::class , 'create'])->name('login');
Route::post('login',[auth\LoginController::class , 'store'])->name('login');

Route::get('main',function(){
    return view('pages.main.main');
});

// booking
Route::get('pesawat',function(){
    return view('pages.main.booking.booking_planes');
});

Route::get('kereta',function(){
    return view('pages.main.booking.booking_trains');
});

Route::get('bus',function(){
    return view('pages.main.booking.booking_buses');
});

// Landing
Route::get('/',function(){
    return view('pages.main.landing.landing_page');
});

Route::get('auth/google/redirect',[auth\social\GoogleAuthController::class,'redirect'])->name('google/redirect');
Route::get('auth/google/callback',[auth\social\GoogleAuthController::class,'callback'])->name('google/callback');
