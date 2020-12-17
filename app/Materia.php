<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = [
        'materia_nombre','materia_codigo','facultad_id'
    ];
}
