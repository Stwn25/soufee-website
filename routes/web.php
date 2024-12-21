<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('landing');

//Auth Pages
Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::post('/login/proses', [App\Http\Controllers\AuthController::class, 'login_proses'])->name('login-proses');
Route::get('/register/proses', [App\Http\Controllers\AuthController::class, 'register_proses'])->name('register-proses');

