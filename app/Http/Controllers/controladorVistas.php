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

    // Este método maneja la lógica de conversión
    public function convertirUnidades(Request $request)
    {
        // Recibir los datos del formulario
        $valor = $request->input('valor');
        $conversion = $request->input('conversion');

        // Lógica para las conversiones
        $resultado = 0;
        switch ($conversion) {
            case 'mb-gb':
                $resultado = $valor / 1024; // MB a GB
                break;
            case 'gb-mb':
                $resultado = $valor * 1024; // GB a MB
                break;
            case 'gb-tb':
                $resultado = $valor / 1024; // GB a TB
                break;
            case 'tb-gb':
                $resultado = $valor * 1024; // TB a GB
                break;
        }

        // Pasar el resultado a la vista
        return view('repaso1', ['resultado' => $resultado]);
    }
}
