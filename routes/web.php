<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::resource('productos', ProductoController::class)
    ->except(['destroy']);

Route::patch('productos/{producto}/estado', [ProductoController::class, 'cambiarEstado'])
    ->name('productos.estado');