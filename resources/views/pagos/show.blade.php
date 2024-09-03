<!-- resources/views/pagos/show.blade.php -->
@extends('layouts.app')

@section('title', 'Detalle del Pago')

@section('content')
    <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
            <img src="" alt="" class="activator" />
        </div>
        <div class="card-content">
            <a href="{{ route('pagos.index') }}" class="btn-flat waves-effect waves-light left">
                Volver
                <i class="material-icons left">arrow_back</i>
            </a>
            <span class="card-title center activator">
            {{-- <span class="card-title "> --}}
                Detalle del Pago #{{ $pago->id }}<i class="material-icons right">remove_red_eye</i>
            </span>
            <br>
            <br>
            <p><strong>Fecha de Pago:</strong> {{ $pago->fecha_pago }}</p><br>
            <p><strong>Monto:</strong> {{ $pago->monto }} Bs</p><br>
            <p><strong>Referencia de Pago:</strong> {{ $pago->referencia_pago }}</p><br>
            <p><strong>Método de Pago:</strong> {{ $pago->metodoPago->nombre }}</p><br>
        </div>
        <div class="card-action">
            <a href="{{ route('pagos.index') }}" class="btn">Volver a la lista</a>
        </div>
        <div class="card-reveal">
            <span class="card-title activator">Archivo adjunto<i class="material-icons right">close</i></span><br>
            @if ($pago->comprobante)
                <img class="materialboxed" width="600" src="{{ asset('storage/' . $pago->comprobante) }}" alt="Comprobante del Pago">
            @else
                <p>No se ha cargado el comprobante</p>
            @endif
        </div>
    </div>
@endsection
