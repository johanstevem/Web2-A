<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;


Route::get('/', function () {
    return view('index'); 
});

Route::resource('vehiculos', VehiculoController::class);

