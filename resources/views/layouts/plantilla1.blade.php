<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['C:\laragon\www\practicaRepasos\resources\js\app.js'])
    <title>@yield('titulo')</title>
</head>
<body>
        {{--inicia navbar--}}
    <ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Portafolio</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="#">Repaso 1</a>
    </li>
    
    </ul>
    {{--termina navbar--}}
    

    @yield('contenido')

</body>
</html>