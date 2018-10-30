<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
	protected $table = 'experiences';

	protected $fillable = [
		'puesto', 'funcion_realizada', 'empresa', 'sector_empresa','mes_anyo_inicio','mes_anyo_fin'
	];

	public function usuario(){
		return $this->belongsTo(User::class, 'id_user');
	}
}
