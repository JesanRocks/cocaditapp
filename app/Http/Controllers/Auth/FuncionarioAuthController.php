<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Funcionario;

class FuncionarioAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.funcionario_login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        $funcionario = Funcionario::where('correo', $request->login)
                                  ->orWhere('cedula', $request->login)
                                  ->first();

        if ($funcionario && Hash::check($request->password, $funcionario->password)) {
            Auth::guard('funcionario')->login($funcionario);
            return redirect()->intended('/funcionario/dashboard');
        }

        return back()->withErrors([
            'login' => 'Estas credenciales no coinciden con nuestros registros.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('funcionario')->logout();
        return redirect('/funcionario');
    }
}

