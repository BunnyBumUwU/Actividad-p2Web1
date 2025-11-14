<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ProductoController;

Route::get('/bienvenida', [PaginaController::class, 'bienvenida']);
Route::get('/saludo/{nombre}', [PaginaController::class, 'saludo']);

Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
