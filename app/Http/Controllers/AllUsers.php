<?php

namespace App\Http\Controllers;

use App\Roles;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class AllUsers extends Controller
{
    public function index()
    {
        // $users = User::with('roles')->get();
        // echo "Hello";

        // echo "/br";
        $users = User::all();
        $roles = Roles::all();
        // echo var_dump($users[0]);
        return view('allusers', compact('users', 'roles'));
    }
}
