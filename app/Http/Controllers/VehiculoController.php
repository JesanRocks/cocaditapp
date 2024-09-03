<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use App\Models\TipoVehiculo;
use App\Models\Marca;
use App\Models\Color;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    // Muestra una lista de todos los vehículos
    public function index()
    {
        $vehiculos = Vehiculo::all();
        return view('vehiculos.index', compact('vehiculos'));
    }

    // Muestra el formulario para crear un nuevo vehículo
    public function create()
    {
        $colores = Color::all();
        $marcas = Marca::all();
        $tiposVehiculo = TipoVehiculo::all();

        return view('vehiculos.create', compact('colores', 'marcas', 'tiposVehiculo'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipo_vehiculo_id' => 'required|exists:tipo_vehiculos,id',
            'marca_id' => 'required|exists:marcas,id',
            'color_id' => 'required|exists:colors,id',
            'año' => 'required|digits:4|integer|min:1900',
            'ejes' => 'required|integer|min:2',
            'tipo_uso' => 'required|in:particular,comercial',
            'valor_fiscal' => 'required|numeric|min:0',
            'fecha_registro' => 'required|date',
            'placa' => 'required|string|unique:vehiculos,placa',  // Añadir validación para placa
        ]);

        Vehiculo::create([
            'contribuyente_id' => auth()->user()->id,
            'tipo_vehiculo_id' => $request->tipo_vehiculo_id,
            'marca_id' => $request->marca_id,
            'modelo' => $request->modelo,
            'año' => $request->año,
            'color_id' => $request->color_id,
            'tipo_uso' => $request->tipo_uso,
            'valor_fiscal' => $request->valor_fiscal,
            'ejes' => $request->ejes,
            'fecha_registro' => $request->fecha_registro,
            'placa' => $request->placa,  // Añadir el campo placa
        ]);

        return redirect()->route('vehiculos.index')->with('success', 'Vehículo registrado correctamente.');
    }

    public function edit(Vehiculo $vehiculo)
    {
        $colores = Color::all();
        $marcas = Marca::all();
        $tiposVehiculo = TipoVehiculo::all();

        return view('vehiculos.edit', compact('vehiculo', 'colores', 'marcas', 'tiposVehiculo'));
    }

    public function update(Request $request, Vehiculo $vehiculo)
    {
        $request->validate([
            'tipo_vehiculo_id' => 'required|exists:tipo_vehiculos,id',
            'marca_id' => 'required|exists:marcas,id',
            'color_id' => 'required|exists:colors,id',
            'año' => 'required|digits:4|integer|min:1900',
            'ejes' => 'required|integer|min:2',
            'tipo_uso' => 'required|in:particular,comercial',
            'valor_fiscal' => 'required|numeric|min:0',
            'fecha_registro' => 'required|date',
            'placa' => 'required|string|unique:vehiculos,placa,' . $vehiculo->id,  // Añadir validación para placa
        ]);

        $vehiculo->update([
            'tipo_vehiculo_id' => $request->tipo_vehiculo_id,
            'marca_id' => $request->marca_id,
            'modelo' => $request->modelo,
            'año' => $request->año,
            'color_id' => $request->color_id,
            'tipo_uso' => $request->tipo_uso,
            'valor_fiscal' => $request->valor_fiscal,
            'ejes' => $request->ejes,
            'fecha_registro' => $request->fecha_registro,
            'placa' => $request->placa,  // Añadir el campo placa
        ]);

        return redirect()->route('vehiculos.index')->with('success', 'Vehículo actualizado correctamente.');
    }


    // Elimina un vehículo específico de la base de datos
    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->delete();

        // Redirección con mensaje de éxito
        return redirect()->route('vehiculos.index')->with('success', 'Vehículo eliminado correctamente.');
    }
}
