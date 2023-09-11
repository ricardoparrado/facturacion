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
        //Nombre y campos de la tabla
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('email');
            $table->timestamps();

            // Relación con la tabla tipo_usuarios
            $table->unsignedBigInteger('tipo_usuarios_id'); // Columna para la clave externa
            $table->foreign('tipo_usuarios_id')
                    ->references('id')
                    ->on('tipo_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
