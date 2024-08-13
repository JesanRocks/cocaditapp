<?php

// database/migrations/xxxx_xx_xx_create_contribuyentes_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContribuyentesTable extends Migration
{
    public function up()
    {
        Schema::create('contribuyentes', function (Blueprint $table) {
            $table->id();
            $table->string('cedula')->unique();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('rif')->unique()->nullable();
            $table->string('razon_social')->nullable();
            $table->string('correo')->unique();
            $table->string('telefono')->nullable();
            $table->string('num_habitacion')->nullable();
            $table->string('direccion');
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contribuyentes');
    }
}
