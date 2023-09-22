<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    
    //Definir tabla correspondiente
    protected $table = 'sucursales'; 

    //Definir columnas y propiedades
    protected $fillable = ['nombre', 'direccion', 'telefono'];
    protected $primaryKey = 'id';

    public function proveedor()
{
    return $this->hasMany(Proveedor::class); //Una sucursal puede tener muchos proveedores

}

}
