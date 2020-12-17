<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $fillable = [
        'unidad_nombre','facultad_id',
    ];
}
