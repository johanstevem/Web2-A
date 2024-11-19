@extends('layouts.app')  <!-- Esto indica que esta vista usa el layout 'app.blade.php' -->

@section('title', isset($vehiculo) ? 'Editar Vehículo' : 'Agregar Vehículo')  <!-- Aquí se establece el título de la página -->

@section('content')  <!-- El contenido de la vista se coloca aquí -->
    <div class="container">
        <h1 class="title">{{ isset($vehiculo) ? 'Editar Vehículo' : 'Agregar Vehículo' }}</h1>

        <form action="{{ isset($vehiculo) ? route('vehiculos.update', $vehiculo->id) : route('vehiculos.store') }}" method="POST">
            @csrf
            @if(isset($vehiculo))
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="descripcion_de_vehiculos">Descripción</label>
                <input type="text" name="descripcion_de_vehiculos" id="descripcion_de_vehiculos" class="form-control" value="{{ old('descripcion_de_vehiculos', isset($vehiculo) ? $vehiculo->descripcion_de_vehiculos : '') }}" required>
            </div>

            <div class="form-group">
                <label for="categoria">Categoría</label>
                <input type="text" name="categoria" id="categoria" class="form-control" value="{{ old('categoria', isset($vehiculo) ? $vehiculo->categoria : '') }}" required>
            </div>

            <button type="submit" class="btn submit-btn">{{ isset($vehiculo) ? 'Actualizar Vehículo' : 'Agregar Vehículo' }}</button>
        </form>
    </div>
@endsection
