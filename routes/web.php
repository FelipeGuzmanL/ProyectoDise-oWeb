<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', [InicioController::class, 'index'])->name('inicio.index');
Route::get('/galeria', [GaleriaController::class, 'index']);
Route::get('/galeria/create', [GaleriaController::class, 'create']);
Route::post('/galeria/create', [GaleriaController::class, 'store']);
Route::get('/contacto', [ContactoController::class, 'index']);
Route::get('/login', [LoginController::class, 'create'])->name('login.index');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LoginController::class, 'destroy'])->name('login.destroy');
Route::get('/register', [RegisterController::class, 'create'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

