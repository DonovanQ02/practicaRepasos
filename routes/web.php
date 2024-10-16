<?php

use Illuminate\Support\Facades\Route;


Route::get('/portafolio', function () {
    return view('portafolio');
})->name('portafolio');


