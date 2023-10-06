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
        Schema::create('marca_tipo_vehiculo', function (Blueprint $table) {
           
            $table->unsignedBigInteger('marca_id');
            $table->unsignedBigInteger('tipo_vehiculo_id');
            $table->timestamps();

            $table->foreign('marca_id')->references('id')->on('marcas')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('tipo_vehiculo_id')->references('id')->on('tipo_vehiculos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marca_tipo_vehiculo');
    }
};
