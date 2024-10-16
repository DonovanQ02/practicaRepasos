<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function portafolio()
    {
        return view('portafolio');
    }

    public function mostrarFormulario()
    {
        return view('formulario');
    }

    public function convertirUnidades(Request $request)
    {
        $valor = $request->input('valor');
        $conversion = $request->input('conversion');

        $resultado = 0;
        switch ($conversion) {
            case 'mb-gb':
                $resultado = $valor / 1024; 
                break;
            case 'gb-mb':
                $resultado = $valor * 1024; 
                break;
            case 'gb-tb':
                $resultado = $valor / 1024; 
                break;
            case 'tb-gb':
                $resultado = $valor * 1024; 
                break;
        }

        return view('repaso1', ['resultado' => $resultado]);
    }
}
