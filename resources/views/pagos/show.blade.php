<!-- resources/views/pagos/show.blade.php -->
@extends('layouts.app')

@section('title', 'Detalle del Pago')

@section('content')
    <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
            <img src="" alt="" class="activator" />
        </div>
        <div class="card-content">
            <span class="card-title activator">
                Detalle del Pago #{{ $pago->id }}<i class="material-icons right">more_vert</i>
            </span>
            <br>
            <br>
            <p><strong>Fecha de Pago:</strong> {{ $pago->fecha_pago }}</p><br>
            <p><strong>Monto:</strong> {{ $pago->monto }}</p><br>
            <p><strong>Referencia de Pago:</strong> {{ $pago->referencia_pago }}</p><br>
            <p><strong>Método de Pago:</strong> {{ $pago->metodoPago->nombre }}</p><br>
        </div>
        <div class="card-action">
            <a href="{{ route('pagos.index') }}" class="btn">Volver a la lista</a>
        </div>
        <div class="card-reveal">
            <span class="card-title activator">Archivo adjunto<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
    </div>
@endsection
