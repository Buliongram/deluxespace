<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('auth.register');
});


Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/trading', [HomeController::class, 'trading'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->name('home');
