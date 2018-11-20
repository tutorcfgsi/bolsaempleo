<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'second_name', 'province', 'city', 'address', 'mobile', 'birthdate', 'email', 'password', 'dni', 'vehicle', 'type', 'photo', 'confirmed', 'confirmation_code', 'current_state', 'observation'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function pathAttachment(){
        return "/BolsaEmpleo/storage/app/user/" . $this->foto;
    }
}
