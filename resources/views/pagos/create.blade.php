<!-- resources/views/pagos/create.blade.php -->
@extends('layouts.app')

@section('title', 'Registrar Pago')

@section('content')
    <div class="card">
        <div class="card-content">
            <a href="{{ route('pagos.index') }}" class="btn-flat waves-effect waves-light left">
                Volver
                <i class="material-icons left">arrow_back</i>
            </a>
            <span class="card-title center">Registrar un Nuevo Pago</span>

            <form action="{{ route('pagos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-field">
                    <i class="material-icons prefix">monetization_on</i>
                    <input type="number" name="monto" id="monto" step="0.01" required>
                    <label for="monto">Monto</label>
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">receipt</i>
                    <input type="text" name="referencia_pago" id="referencia_pago" required>
                    <label for="referencia_pago">Referencia de Pago</label>
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">payment</i>
                    <select name="metodo_pago_id" id="metodo_pago_id" required>
                        <option value="" disabled selected>Seleccione un método de pago</option>
                        @foreach ($metodosPago as $metodo)
                            <option value="{{ $metodo->id }}">{{ $metodo->nombre }}</option>
                        @endforeach
                    </select>
                    <label for="metodo_pago_id">Método de Pago</label>
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">date_range</i>
                    <input type="date" name="fecha_pago" id="fecha_pago" required>
                    <label for="fecha_pago">Fecha de Pago</label>
                </div>

                <div class="file-field input-field">
                    <div class="btn">
                        <span><i class="material-icons left">insert_photo</i> Comprobante</span>
                        <input type="file" name="comprobante" id="comprobante">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Sube la imagen del comprobante">
                    </div>
                </div>
                
            </div>
            <div class="card-action center">
                <button type="submit" class="btn waves-effect waves-light">
                    Registrar Pago
                    <i class="material-icons left">send</i>
                </button>
            </form>
        </div>
    </div>
@endsection
