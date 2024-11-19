@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Vehículo</h1>
        <table class="table">
            <tr>
                <th>ID</th>
                <td>{{ $vehiculo->id }}</td>
            </tr>
            <tr>
                <th>Descripción</th>
                <td>{{ $vehiculo->descripcion_de_vehiculos }}</td>
            </tr>
            <tr>
                <th>Categoría</th>
                <td>{{ $vehiculo->categoria }}</td>
            </tr>
            <tr>
                <th>Fecha de Creación</th>
                <td>{{ $vehiculo->created_at }}</td>
            </tr>
            <tr>
                <th>Fecha de Actualización</th>
                <td>{{ $vehiculo->updated_at }}</td>
            </tr>
        </table>
        <a href="{{ route('vehiculos.index') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection
