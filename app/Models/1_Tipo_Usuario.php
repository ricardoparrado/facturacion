<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Usuario extends Model
{
    use HasFactory;

    //Definir tabla correspondiente
    protected $table = 'tipo_usuarios'; 

    //Definir columnas y propiedades
    protected $fillable = ['nombre', 'descripcion'];
    protected $primaryKey = 'id';

    public function usuarios()
{
    return $this->hasMany(Usuario::class); //Un tipo de usuario puede tener muchos usuarios
}


}
