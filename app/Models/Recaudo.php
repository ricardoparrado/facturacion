<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recaudo extends Model
{
    use HasFactory;

        //Definir tabla correspondiente
        protected $table = 'recaudos'; 

        //Definir columnas y propiedades
        protected $fillable = ['fecha_factura', 'fecha_recaudo', 'valor_a_pagar'];
        protected $primaryKey = 'id';
    
        public function proveedor()
        {
            return $this->belongsTo(Proveedor::class, 'proveedor_id'); // Muchos recaudos pertenecen a un proveedor
        }
            
 
}
