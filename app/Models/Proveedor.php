<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    //Definir tabla correspondiente
    protected $table = 'proveedores'; 

    //Definir columnas y propiedades
    protected $fillable = ['nombre', 'telefono', 'direccion', 'email'];
    protected $primaryKey = 'id';

    public function factura_proveedores()
{
    return $this->hasMany(Factura_Proveedor::class); //Un proveedor puede tener muchas facturas
}

    public function recaudos()
{
    return $this->hasMany(Recaudo::class); //Un proveedor puede tener muchos recaudos
}

}
