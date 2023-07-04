<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
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

    public function show(Company $company)
    {
        //
    }

    public function edit(Company $company)
    {
        //
    }

    public function update(Request $request, Company $company)
    {
        //
    }

    public function destroy(Company $company)
    {
        //
    }




    public function showRegistrationForm()
    {
        return view('auth.register-company');
    }

    public function register(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'name_of_company' => 'required',
        ]);

        // Crear el usuario
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => 'Empresa',
        ]);

        // Crear la empresa relacionada
        $empresa = Company::create([
            'user_id' => $user->id,
            'name_of_company' => $request->name_of_company,
            'descripcion' => $request->descripcion,
            'path_of_photo' => $request->path_of_photo,
            'address' => $request->address,
        ]);

        // Iniciar sesión automáticamente al usuario registrado
        Auth::login($user);
        
        // Redirigir o realizar otras acciones necesarias
        return redirect('/home');
    }
}
