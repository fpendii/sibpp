<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BerandaController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;



// Ruoute Halaman Dashboard
Route::get('/', [IndexController::class, 'index']); 

// Route Halaman Login
Route::prefix('user')->group(function(){
    Route::get('beranda', [IndexController::class, 'index']); 
});
Route::get('login', [LoginController::class, 'index']); 
Route::post('login', [LoginController::class, 'authenticate']); 

// Route Halaman Admin
Route::prefix('admin')->group(function(){
    Route::get('beranda', [BerandaController::class, 'index']);
});
