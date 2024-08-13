<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Contribuyente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ContribuyenteRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.contribuyente_register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'cedula' => 'required|unique:contribuyentes,cedula|max:255',
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'rif' => 'required|string|max:255|unique:contribuyentes,rif',
            'razon_social' => 'required|string|max:255',
            'correo' => 'required|email|unique:contribuyentes,correo|max:255',
            'telefono' => 'nullable|string|max:255',
            'num_habitacion' => 'nullable|string|max:255',
            'direccion' => 'nullable|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $contribuyente = Contribuyente::create([
            'cedula' => $request->cedula,
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'rif' => $request->rif,
            'razon_social' => $request->razon_social,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
            'num_habitacion' => $request->num_habitacion,
            'direccion' => $request->direccion,
            'password' => Hash::make($request->password),
        ]);

        // Aquí podrías hacer login automático del contribuyente después del registro
        // Auth::guard('contribuyente')->login($contribuyente);

        return redirect()->route('contribuyente.login.form')->with('success', 'Registro completado con éxito.');
    }
}
