<?php

use Illuminate\Support\Facades\Route;

// auth Controller
use App\Http\Controllers\auth ; 
use App\Http\Controllers\payments\StripePaymentController;
use App\Http\Controllers\main\admin;
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

Route::middleware('guest')->group(function () {
    Route::get('register',[auth\AuthController::class , 'viewRegister'])->name('register');
    Route::post('register',[auth\AuthController::class , 'register'])->name('register');

    Route::get('login',[auth\AuthController::class , 'viewLogin'])->name('login');
    Route::post('login',[auth\AuthController::class , 'login'])->name('login');

    // google auth
    Route::get('auth/google/redirect',[auth\social\GoogleAuthController::class,'redirect'])->name('google/redirect');
    Route::get('auth/google/callback',[auth\social\GoogleAuthController::class,'callback'])->name('google/callback');

    // facebook auth
    Route::get('auth/facebook/redirect',[auth\social\FacebookAuthController::class,'redirect'])->name('facebook/redirect');
    Route::get('auth/facebook/callback',[auth\social\FacebookAuthController::class,'callback'])->name('facebook/callback');
});

Route::get('logout',[auth\AuthController::class , 'logout'])->name('logout');

Route::middleware('admin')->group(function () {
    // main
    Route::get('flight',[admin\products\FlightController::class,'main']);
    // create
    Route::get('flight/form',[admin\products\FlightController::class,'create']);
    Route::post('flight/form',[admin\products\FlightController::class,'store']);
    // update
    Route::get('flight/edit/{id}',[admin\products\FlightController::class,'edit']);
    Route::post('flight/edit/{id}',[admin\products\FlightController::class,'update']);
    // delete
    Route::get('flight/delete/{id}',[admin\products\FlightController::class,'delete']);
    Route::get('flight/destroy/{id}',[admin\products\FlightController::class,'destroy']);
});



Route::get('home',function(){
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

Route::get('kirim-email',[App\Http\Controllers\mail\MailController::class,'index']);

Route::get('stripe', [StripePaymentController::class, 'stripe'])->name('stripe');
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');


