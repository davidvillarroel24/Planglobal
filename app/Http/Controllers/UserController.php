<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::latest()->get();

        return view('usuarios.index', compact('usuarios'));
    }
}