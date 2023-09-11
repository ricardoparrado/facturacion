<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura_Proveedor extends Model
{
    use HasFactory;

        //Definir tabla correspondiente
        protected $table = 'factura_proveedores'; 

        //Definir columnas y propiedades
        protected $fillable = ['descripcion', 'valor_factura', 'valor_iva', 'valor_total','fecha_factura'];
        protected $primaryKey = 'id';
    
        public function proveedor()
        {
            return $this->belongsTo(Proveedor::class, 'proveedor_id'); // Una factura de proveedor pertenece a un proveedor
        }
            
    
}
