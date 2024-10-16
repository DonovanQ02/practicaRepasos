<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function portafolio(){
        return view('/portafolio');
    }
    public function repaso1(){
        return view('/repaso1');
    }
}
