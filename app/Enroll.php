<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    protected $table = 'enrolls';

    protected $fillable = [
		'id_user', 'id_oferta', 'seleccionado'
	];
}
