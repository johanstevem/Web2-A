<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi CRUD en Laravel')</title>
    <link rel="stylesheet" href="{{ asset('css/stilo.css') }}">
</head>
<body>
    <header>
        <h1>Mi Aplicación</h1>
        <nav>
            <a href="{{ route('vehiculos.index') }}">Inicio</a>
            <a href="{{ route('vehiculos.create') }}">Crear Vehículo</a>
        </nav>
    </header>
    <main>
        @yield('content')  <!-- Aquí se insertará el contenido específico de cada vista -->
    </main>
</body>
</html>
