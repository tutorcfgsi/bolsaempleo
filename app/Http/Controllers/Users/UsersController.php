<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        $desactivados = User::where('activado', 0)->count();

        return view('users.users', compact('users', 'desactivados'));
    }
}
