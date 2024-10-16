<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;


Route::get('/portafolio', [controladorVistas::class, 'portafolio'])->name('portafolio');
Route::get('/formulario', [controladorVistas::class, 'mostrarFormulario'])->name('formulario');

Route::post('/repaso1', [controladorVistas::class, 'convertirUnidades'])->name('repaso1');
