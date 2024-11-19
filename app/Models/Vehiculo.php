<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    // Si la tabla tiene un nombre diferente a la forma plural del modelo, defínelo aquí.
    protected $table = 'vehiculos';  

    // Si deseas especificar las columnas que puedes asignar masivamente (Mass Assignment).
    protected $fillable = [
        'descripcion_de_vehiculos',  
        'categoria',                  
    ];
}
