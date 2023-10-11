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
        Schema::create('facturas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('vehiculo_id');

            $table->string('horaEntrada',20);
            $table->string('horaSalida',20);
            $table->integer('valor');
            $table->timestamps();

            $table->foreign('vehiculo_id')->references('idVehiculo')->on('vehiculos')
            ->onDelete('cascade')
            ->onUpdate('cascade');

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
