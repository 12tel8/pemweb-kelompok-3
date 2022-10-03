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

// Route::middleware('guest')->group(function () {
    Route::get('register',[auth\RegisterController::class , 'create'])->name('register')->middleware('guest');
    Route::post('register',[auth\RegisterController::class , 'store'])->name('register');

    Route::get('login',[auth\LoginController::class , 'create'])->name('login')->middleware('guest');
    Route::post('login',[auth\LoginController::class , 'store'])->name('login');
// });



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

Route::get('auth/facebook/redirect',[auth\social\FacebookAuthController::class,'redirect'])->name('facebook/redirect');
Route::get('auth/facebook/callback',[auth\social\FacebookAuthController::class,'callback'])->name('facebook/callback');

Route::get('kirim-email',[App\Http\Controllers\mail\MailController::class,'index']);

Route::get('stripe', [StripePaymentController::class, 'stripe'])->name('stripe');
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');

Route::get('admin/flight',[admin\transport\FlightController::class,'create'])->name('admin/flight');
Route::post('admin/flight',[admin\transport\FlightController::class,'store'])->name('admin/flight');