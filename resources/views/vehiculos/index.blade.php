@extends('layouts.app')  <!-- Esto indica que esta vista usa el layout 'app.blade.php' -->

@section('title', 'Lista de Vehículos')  <!-- Aquí se establece el título de la página -->

@section('content')  <!-- El contenido de la vista se coloca aquí -->
    <div class="container">
        <h1>Lista de Vehículos</h1>
        <a href="{{ route('vehiculos.create') }}">Agregar Vehículo</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descripción</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vehiculos as $vehiculo)
                    <tr>
                        <td>{{ $vehiculo->id }}</td>
                        <td>{{ $vehiculo->descripcion_de_vehiculos }}</td>
                        <td>{{ $vehiculo->categoria }}</td>
                        <td>
                            <a href="{{ route('vehiculos.edit', $vehiculo->id) }}">Editar</a>
                            <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
