<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $table = 'formacions';

    protected $fillable = [
        'titulo', 'grado', 'centro','finalizado', 'anyo_finalizacion',
    ];

    public function usuario(){
		return $this->belongsTo(User::class, 'id_user');
	}
}
