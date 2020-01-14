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
        $users = User::all();
        return view('allusers', compact('users'));
    }
}
