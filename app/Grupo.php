<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = [
        'grupo_numero','materia_id','facultad_id'
    ];
}
