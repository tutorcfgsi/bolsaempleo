<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'languages';

    protected $fillable = [
        'idioma', 'nivel_hablado', 'nivel_escrito','titulo_oficial',
    ];

	public function usuario(){
		return $this->belongsTo(User::class, 'id_user');
	}
}
