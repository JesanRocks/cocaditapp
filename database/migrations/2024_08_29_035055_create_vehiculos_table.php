<?php
// database/migrations/yyyy_mm_dd_create_vehiculos_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contribuyente_id');
            $table->unsignedBigInteger('tipo_vehiculo_id');
            $table->unsignedBigInteger('marca_id');
            //$table->unsignedBigInteger('modelo_id')->nullable(); // Si los modelos son específicos
            
            $table->string('modelo')->nullable(); // Si los modelos son específicos
            $table->unsignedBigInteger('color_id');
            $table->year('año');
            $table->integer('ejes')->default(2);
            $table->string('placa')->unique();
            $table->enum('tipo_uso', ['particular', 'comercial']);
            $table->decimal('valor_fiscal', 15, 2);
            $table->date('fecha_registro');
            $table->timestamps();

            // Claves foráneas
            $table->foreign('contribuyente_id')->references('id')->on('contribuyentes')->onDelete('cascade');
            $table->foreign('tipo_vehiculo_id')->references('id')->on('tipo_vehiculos')->onDelete('cascade');
            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
