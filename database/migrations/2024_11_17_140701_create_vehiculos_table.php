<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crear la tabla vehiculos sin tildes
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion_de_vehiculos'); // Sin tilde en 'vehiculos'
            $table->string('categoria'); // Si ya no se usará tilde en categoria, lo dejas así
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Eliminar la tabla vehiculos
        Schema::dropIfExists('vehiculos');
    }
};
