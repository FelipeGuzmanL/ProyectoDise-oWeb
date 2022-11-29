<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\InicioController;

Route::get('/', [InicioController::class, 'index']);
Route::get('/galeria', [GaleriaController::class, 'index']);
Route::get('/galeria/create', [GaleriaController::class, 'create']);

