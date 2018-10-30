<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offers';

     protected $fillable = [
        'titulo','descripcion', 'empresa','sector', 'fecha_limite',
    ];
}
