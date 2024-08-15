<?php
// app/Http/Controllers/PagoController.php
namespace App\Http\Controllers;

use App\Models\Pago;
use App\Models\MetodoPago;
use App\Models\Contribuyente;
use Illuminate\Http\Request;

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
        ]);

        Pago::create([
            'contribuyente_id' => auth()->user()->id,
            'monto' => $request->monto,
            'referencia_pago' => $request->referencia_pago,
            'fecha_pago' => $request->fecha_pago,
            'metodo_pago_id' => $request->metodo_pago_id,
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
}
