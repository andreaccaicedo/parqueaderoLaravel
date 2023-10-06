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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('factura_id');
            $table->unsignedBigInteger('estado_id')->nullable();
            $table->unsignedBigInteger('marca_id');
            $table->unsignedBigInteger('usuario_id');

            $table->string('placa',8);
            $table->string('observaciones',45);
            $table->timestamps();
            

            $table->foreign('factura_id')->references('id')->on('facturas')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('estado_id')->references('id')->on('estados')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('marca_id')->references('id')->on('marcas')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('usuario_id')->references('id')->on('usuarios')
            ->onDelete('cascade')
            ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
