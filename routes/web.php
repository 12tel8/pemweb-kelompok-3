<?php

use Illuminate\Support\Facades\Route;

// auth Controller
use App\Http\Controllers\auth\RegisterController ; 
use App\Http\Controllers\auth\LoginController ; 

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

Route::get('register',[RegisterController::class , 'create'])->name('register');
Route::post('register',[RegisterController::class , 'store'])->name('register');

Route::get('login',[LoginController::class , 'create'])->name('login');
Route::post('login',[LoginController::class , 'store'])->name('login');

Route::get('main',function(){
    return view('pages.main.main');
});