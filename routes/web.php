<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

// Rutas de tu aplicación
Route::get('/portafolio', [controladorVistas::class, 'portafolio'])->name('portafolio');
Route::get('/formulario', [controladorVistas::class, 'mostrarFormulario'])->name('formulario');

// Cambia 'repaso1' a 'convertirUnidades' ya que este es el método que contiene la lógica de conversión
Route::post('/repaso1', [controladorVistas::class, 'convertirUnidades'])->name('repaso1');
