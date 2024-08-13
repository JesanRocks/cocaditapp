<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Contribuyente;

class ContribuyenteAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.contribuyente_login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        $contribuyente = Contribuyente::where('correo', $request->login)
                                      ->orWhere('cedula', $request->login)
                                      ->first();

        if ($contribuyente && Hash::check($request->password, $contribuyente->password)) {
            Auth::login($contribuyente);
            return redirect()->intended('/contribuyente/dashboard');
        }

        return back()->withErrors([
            'login' => 'Estas credenciales no coinciden con nuestros registros.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
