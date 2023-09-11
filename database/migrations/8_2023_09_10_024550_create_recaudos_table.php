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
        Schema::create('recaudos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_factura');
            $table->date('fecha_recaudo');
            $table->decimal('valor_a_pagar', 10, 2);
            $table->timestamps();

            // Relación con la tabla proveedores
            $table->unsignedBigInteger('proveedor_id'); // Columna para la clave externa
            $table->foreign('proveedor_id')
                    ->references('id')
                    ->on('proveedores');

            // Relación con la tabla tipo_recaudos
            $table->unsignedBigInteger('tipo_recaudo_id'); // Columna para la clave externa
            $table->foreign('tipo_recaudo_id')
                    ->references('id')
                    ->on('tipo_recaudos');

            // Relación con la tabla forma_pagos
            $table->unsignedBigInteger('forma_pagos_id'); // Columna para la clave externa
            $table->foreign('forma_pagos_id')
                    ->references('id')
                    ->on('forma_pagos');

            // Relación con la tabla usuarios
            $table->unsignedBigInteger('usuarios_id'); // Columna para la clave externa
            $table->foreign('usuarios_id')
                    ->references('id')
                    ->on('usuarios');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recaudos');
    }
};
