<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tipo_vehiculos', function (Blueprint $table) {
            $table->bigIncrements('idTipoVehiculo');
            $table->string('tipoVehiculo',45);
            //Valor por hora vehículo?
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_vehiculos');
    }
};
