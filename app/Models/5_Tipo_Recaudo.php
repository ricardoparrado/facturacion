<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Recaudo extends Model
{
    use HasFactory;

    //Definir tabla correspondiente
    protected $table = 'tipo_recaudos'; 

    //Definir columnas y propiedades
    protected $fillable = ['nombre', 'descripcion'];
    protected $primaryKey = 'id';

    public function recaudos()
{
    return $this->hasMany(Recaudo::class); //Un tipo de recaudo puede tener muchos recaudos
}


}
