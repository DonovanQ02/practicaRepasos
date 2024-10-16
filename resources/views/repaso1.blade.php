@extends('layouts.plantilla1')

@section('titulo', 'Resultado de la Conversión')

@section('contenido')
<div class="container mt-4">
    <h2>Resultado de la Conversión</h2>
    
    @if(isset($resultado))
        <p>El resultado es: {{ $resultado }}</p>
    @else
        <p>No se ha realizado ninguna conversión aún.</p>
    @endif

    <a href="{{ route('formulario') }}" class="btn btn-secondary">Volver al formulario</a>
</div>
@endsection
