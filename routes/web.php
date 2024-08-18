<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('login','login')->name('login');
Route::view('register','register')->name('register');
Route::post('registerdata',[UserController::class,'saveData'])->name('saveData');
Route::get('dashboard',[UserController::class,'dashboardPage'])->name('dashboard');
Route::post('loginmatch',[UserController::class,'login'])->name('loginMatch');
Route::get('logout',[UserController::class,'logout'])->name('logout');
