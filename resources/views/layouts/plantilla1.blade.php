<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['C:\laragon\www\practicaRepasos\resources\js\app.js'])
    <title>@yield('titulo')</title>
</head>
<body>
    {{-- Inicia navbar --}}
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link {{ Route::is('portafolio') ? 'active' : '' }}" aria-current="page" href="{{ route('portafolio') }}">
                Portafolio
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::is('repaso1') ? 'active' : '' }}" aria-current="page" href="{{ route('repaso1') }}">
                Repaso 1
            </a>
        </li>
    </ul>
    {{-- Termina navbar --}}
    
    @yield('contenido')

</body>
</html>
