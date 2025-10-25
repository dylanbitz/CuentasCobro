<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CrearUsuario
{
    public function showRegistrationForm()
    {
        return view('registro.registro');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'contrasenia' => 'required|string|min:8|confirmed',
        ]);

        $usuario = User::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'contrasenia' => Hash::make($request->contrasenia),
        ]);

        Auth::login($usuario);

        return redirect('/dashboard');
    }
}
