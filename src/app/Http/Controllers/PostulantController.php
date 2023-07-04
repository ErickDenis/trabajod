<?php

namespace App\Http\Controllers;

use App\Models\Postulant;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PostulantController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Postulant $postulant)
    {
        //
    }

    public function edit(Postulant $postulant)
    {
        //
    }

    public function update(Request $request, Postulant $postulant)
    {
        //
    }

    public function destroy(Postulant $postulant)
    {
        //
    }



    public function showRegistrationForm()
    {
        return view('auth.register-postulant');
    }

    public function register(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'name' => 'required',
            'last_name' => 'required',
            'birthdate' => 'required',
        ]);

        // Crear el usuario
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => 'Postulante',
        ]);

        // Crear la empresa relacionada
        $empresa = Postulant::create([
            'user_id' => $user->id,
            'name' => $request->name,
            'last_name' => $request->last_name,
            'birthdate' => $request->birthdate,
        ]);

        // Iniciar sesión automáticamente al usuario registrado
        Auth::login($user);
        
        // Redirigir o realizar otras acciones necesarias
        return redirect('/home');
    }
}
