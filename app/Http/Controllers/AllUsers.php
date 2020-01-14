<?php

namespace App\Http\Controllers;

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
        // echo var_dump($users);
        return view('allusers', compact('users'));
    }
}
