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
        Schema::create('factura_proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->integer('valor_factura');
            $table->integer('valor_IVA');
            $table->integer('valor_total');
            $table->date('fecha_factura');
            $table->timestamps();

            //Relacion con la tabla sucursal
            $table->unsignedBigInteger('proveedor_id'); // Columna para la clave externa
            $table->foreign('proveedor_id')
                    ->references('id')
                    ->on('proveedores');           
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factura_proveedores');
    }
};
