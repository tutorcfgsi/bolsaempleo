<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;

class AdminController extends Controller
{
    public function importUsers(){
        //Excel::import(User::class,'\users.csv');
        Excel::import(new UsersImport, 'users.xlsx');

        //dd("Importación completada con éxito");
        return back();
    }
}
