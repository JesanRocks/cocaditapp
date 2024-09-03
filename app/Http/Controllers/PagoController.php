<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use App\Models\MetodoPago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PagoController extends Controller
{
    public function index()
    {
        $pagos = Pago::where('contribuyente_id', auth()->user()->id)->get();
        return view('pagos.index', compact('pagos'));
    }

    public function create()
    {
        $metodosPago = MetodoPago::all();
        return view('pagos.create', compact('metodosPago'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'monto' => 'required|numeric|min:0',
            'referencia_pago' => 'required|unique:pagos',
            'fecha_pago' => 'required|date',
            'metodo_pago_id' => 'required|exists:metodos_pago,id',
            'comprobante' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validación de archivo
        ]);

        // Manejo del archivo de comprobante
        $comprobantePath = null;
        if ($request->hasFile('comprobante')) {
            $comprobantePath = $request->file('comprobante')->store('comprobantes', 'public');
        }

        Pago::create([
            'contribuyente_id' => auth()->user()->id,
            'monto' => $request->monto,
            'referencia_pago' => $request->referencia_pago,
            'fecha_pago' => $request->fecha_pago,
            'metodo_pago_id' => $request->metodo_pago_id,
            'comprobante' => $comprobantePath, // Guardar la ruta del comprobante
        ]);

        return redirect()->route('pagos.index')->with('success', 'Pago registrado correctamente.');
    }

    public function show(Pago $pago)
    {
        if ($pago->contribuyente_id !== auth()->user()->id) {
            abort(403);
        }

        return view('pagos.show', compact('pago'));
    }

    // public function edit(Pago $pago)
    // {
    //     if ($pago->contribuyente_id !== auth()->user()->id) {
    //         abort(403);
    //     }

    //     $metodosPago = MetodoPago::all();
    //     return view('pagos.edit', compact('pago', 'metodosPago'));
    // }

    // public function update(Request $request, Pago $pago)
    // {
    //     if ($pago->contribuyente_id !== auth()->user()->id) {
    //         abort(403);
    //     }

    //     $request->validate([
    //         'monto' => 'required|numeric|min:0',
    //         'referencia_pago' => 'required|unique:pagos,referencia_pago,' . $pago->id,
    //         'fecha_pago' => 'required|date',
    //         'metodo_pago_id' => 'required|exists:metodos_pago,id',
    //         'comprobante' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    //     ]);

    //     // Manejo del archivo de comprobante
    //     if ($request->hasFile('comprobante')) {
    //         // Eliminar el archivo antiguo si existe
    //         if ($pago->comprobante) {
    //             Storage::disk('public')->delete($pago->comprobante);
    //         }

    //         // Subir el nuevo archivo
    //         $comprobantePath = $request->file('comprobante')->store('comprobantes', 'public');
    //     } else {
    //         $comprobantePath = $pago->comprobante;
    //     }

    //     $pago->update([
    //         'monto' => $request->monto,
    //         'referencia_pago' => $request->referencia_pago,
    //         'fecha_pago' => $request->fecha_pago,
    //         'metodo_pago_id' => $request->metodo_pago_id,
    //         'comprobante' => $comprobantePath,
    //     ]);

    //     return redirect()->route('pagos.index')->with('success', 'Pago actualizado correctamente.');
    // }

    // public function destroy(Pago $pago)
    // {
    //     if ($pago->contribuyente_id !== auth()->user()->id) {
    //         abort(403);
    //     }

    //     // Eliminar el archivo de comprobante si existe
    //     if ($pago->comprobante) {
    //         Storage::disk('public')->delete($pago->comprobante);
    //     }

    //     $pago->delete();

    //     return redirect()->route('pagos.index')->with('success', 'Pago eliminado correctamente.');
    // }
}
