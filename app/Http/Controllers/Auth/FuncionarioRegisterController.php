<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FuncionarioRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.funcionario_register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'cedula' => 'required|unique:funcionarios,cedula|max:255',
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'correo' => 'required|email|unique:funcionarios,correo|max:255',
            'telefono' => 'nullable|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $funcionario = Funcionario::create([
            'cedula' => $request->cedula,
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('funcionario.login.form')->with('success', 'Registro de funcionario completado con éxito.');
    }
}

