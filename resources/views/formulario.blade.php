@extends('layouts.plantilla1')

@section('titulo', 'Conversor de Unidades')

@section('contenido')
<div class="container mt-4">
    <h2>Conversor de Unidades</h2>
    <form action="{{ route('repaso1') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="valor" class="form-label">Valor a convertir:</label>
            <input type="number" class="form-control" id="valor" name="valor" required>
        </div>

        <div class="mb-3">
            <label for="conversion" class="form-label">Tipo de conversión:</label>
            <select class="form-control" id="conversion" name="conversion" required>
                <option value="mb-gb">MB a GB</option>
                <option value="gb-mb">GB a MB</option>
                <option value="gb-tb">GB a TB</option>
                <option value="tb-gb">TB a GB</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Convertir</button>
    </form>
</div>
@endsection
