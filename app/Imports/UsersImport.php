<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
//use Carbon\Carbon;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //dd($row);
        $ciclo = $row[13];
        $anyo_titulo = $row[14];
        //$cumple = Carbon::createFromFormat('Y-m-d',now());
        //dd($cumple);

        return new User([
            'name'              => $row[1],
            'second_name'       => $row[2],
            //'birthdate'         => Carbon::createFromFormat('Y-m-d',$row[3]),
            'dni'               => $row[4],
            'mobile'            => $row[5],
            'email'             => $row[8]? $row[8]: 'a@a.com',
            'address'           => $row[9], 
            'city'              => $row[10],
            'province'          => $row[11],
            'password'          => Hash::make("123456"),
            'current_state'     => 'En paro'
        ]);
    }
}
