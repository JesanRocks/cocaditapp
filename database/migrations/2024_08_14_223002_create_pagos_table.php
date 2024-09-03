<?php
// database/migrations/xxxx_xx_xx_create_pagos_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contribuyente_id'); // Relación con el contribuyente
            $table->decimal('monto', 10, 2);
            $table->string('referencia_pago')->unique();
            $table->unsignedBigInteger('metodo_pago_id');
            $table->date('fecha_pago');
            $table->string('comprobante')->nullable(); // Añadir campo para la ruta de la imagen
            $table->timestamps();

            // Clave foránea
            $table->foreign('contribuyente_id')->references('id')->on('contribuyentes')->onDelete('cascade');

            $table->foreign('metodo_pago_id')->references('id')->on('metodos_pago')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
