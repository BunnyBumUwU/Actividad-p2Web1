<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\PaginaController;

Route::get('/bienvenida', [PaginaController::class, 'bienvenida']);
Route::get('/saludo/{nombre}', [PaginaController::class, 'saludo']);
