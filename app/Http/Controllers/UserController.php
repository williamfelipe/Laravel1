<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //dd('UserController@index');
        //return view('users.index');
        $users = User::get();
        /*return view('users.index',[
            'users' => $users,
        ]);*/
        return view('users.index', compact('users'));//igual a linha anterior
    }

    public function show($id)
    {
        dd('user.show', $id);
        //return view('users.show');
    }
}
