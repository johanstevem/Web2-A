<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $table = 'vehiculo';  

    protected $fillable = [
        'descripcion_de_vehiculo',  
        'categorias',                  
    ];
}