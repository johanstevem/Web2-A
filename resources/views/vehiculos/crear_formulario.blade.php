@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Vehículo</h1>
        <form action="{{ route('vehiculos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" class="form-control" name="descripcion_de_vehiculos" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoría</label>
                <input type="text" class="form-control" name="categoria" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
