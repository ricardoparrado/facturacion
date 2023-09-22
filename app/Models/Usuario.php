<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    //Definir tabla correspondiente
    protected $table = 'usuarios'; 

    //Definir columnas y propiedades
    protected $fillable = ['nombres', 'apellidos', 'email'];
    protected $primaryKey = 'id';

    public function recaudos()
{
    return $this->hasMany(Recaudo::class); //Un usuario puede tener muchos recaudos
}


}
