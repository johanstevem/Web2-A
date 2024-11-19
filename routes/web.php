<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;


Route::get('/', function () {
    return view('index'); // Asegúrate de que esta vista esté correctamente definida
});

// CRUD para la tabla vehículos
Route::resource('vehiculos', VehiculoController::class);

