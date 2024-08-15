<!-- resources/views/pagos/index.blade.php -->
@extends('layouts.app')

@section('title', 'Gestión de Pagos')

@section('content')
    <div class="card">
        <div class="card-content">
            <span class="card-title">Pagos Realizados
                <a class="btn waves-effect waves-light right" href="{{ route('pagos.create') }}">
                    Registrar pago
                    <i class="material-icons left">add</i>
                </a>
            </span>
            <table class="highlight">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Monto</th>
                        <th>Referencia</th>
                        <th>Método</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pagos as $pago)
                        <tr>
                            <td>{{ $pago->id }}</td>
                            <td>{{ $pago->fecha_pago }}</td>
                            <td>{{ $pago->monto }} Bs</td>
                            <td>{{ $pago->referencia_pago }}</td>
                            <td>{{ $pago->metodoPago->nombre }}</td>
                            <td><a href="{{ route('pagos.show', $pago->id) }}" class="btn-small">Ver</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require
                little markup to use effectively.</p> --}}
        </div>
        <div class="card-action">
            {{-- <a href="#">This is a link</a>
            <a href="#">This is a link</a> --}}
        </div>
    </div>
@endsection
