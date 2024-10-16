<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\controladorVistas;


/*Route::get('/portafolio', function () {
    return view('portafolio');
})->name('portafolio');

Route::get('/repaso1', function () {
    return view('repaso1');
})->name('repaso1');

*/

route::get('/portafolio', [controladorVistas::class, 'portafolio']);
route::get('/repaso1', [controladorVistas::class, 'repaso1']);