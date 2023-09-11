<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forma_Pago extends Model
{
    use HasFactory;

    //Definir tabla correspondiente
    protected $table = 'forma_pagos'; 

    //Definir columnas y propiedades
    protected $fillable = ['nombre', 'descripcion'];
    protected $primaryKey = 'id';

    public function recaudos()
{
    return $this->hasMany(Recaudo::class); //Una forma de pago puede tener muchos recaudos
}


}
