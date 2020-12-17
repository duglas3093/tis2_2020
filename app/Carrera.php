<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $fillable = [
        'carrera_nombre','carrera_codigo','unidad_id','facultad_id'
    ];
    /*
    * Obtener carreras con sus respectivas unidades
    */
    // function get_carreras(){
        
    // }
}
