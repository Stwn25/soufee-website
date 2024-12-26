<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KapasitasController;
use App\Http\Controllers\PegawaiController;


//Landing Pages
Route::get('/', function () {
    return view('welcome');
})->name('landing');

//Auth Pages
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login-proses', [AuthController::class, 'login_proses'])->name('login-proses');
Route::get('/register/proses', [AuthController::class, 'register_proses'])->name('register-proses');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

//Dashboard
Route::group(['middleware' => ['auth']], function () {
    //Petani
    Route::get('/dashboard-petani', [UserController::class,'dashboard_petani'])
    ->middleware('role:petani')
    ->name('dashboard-petani');

    //Pengepul
    Route::get('/dashboard-pengepul', [UserController::class,'dashboard_pengepul'])
    ->middleware('role:pengepul')
    ->name('dashboard-pengepul');
});

//Pages dengan authentikasi sebagai Pengepul
Route::middleware(['role:pengepul'])->group(function () {
    //Kapasitas
    Route::get('/create-kapasitas', [KapasitasController::class, 'create_kapasitas'])->name('create-kapasitas');
    Route::post('/store-kapasitas', [KapasitasController::class, 'store_kapasitas'])->name('store-kapasitas');
    Route::get('/update-kapasitas/{kapasitas}', [KapasitasController::class, 'update_kapasitas'])->name('update-kapasitas');
    Route::put('/update-kapasitas/{kapasitas}', [KapasitasController::class, 'update_kapasitas_proses'])->name('update-kapasitas-proses');  
    Route::delete('/delete-kapasitas/{kapasitas}', [KapasitasController::class, 'delete_kapasitas'])->name('delete-kapasitas');

    //Pegawai
    Route::get('/data-pegawai', [PegawaiController::class, 'index'])->name('data-pegawai');
    Route::get('/create-pegawai', [PegawaiController::class, 'create_pegawai'])->name('create-pegawai');
    Route::post('/store-pegawai', [PegawaiController::class, 'store_pegawai'])->name('store-pegawai');
    Route::get('/update-pegawai/{pegawai}', [PegawaiController::class, 'update_pegawai'])->name('update-pegawai');
    Route::put('/update-pegawai/{pegawai}', [PegawaiController::class, 'update_pegawai_proses'])->name('update-pegawai-proses');
    Route::delete('/delete-pegawai/{pegawai}', [PegawaiController::class, 'delete_pegawai'])->name('delete-pegawai');
}); 

//Pages dengan authentikasi sebagai Petani
Route::middleware(['role:petani'])->group(function () {
    Route::get('/penjemputan',[UserController::class, 'penjemputan'])->name('penjemputan-petani');
});