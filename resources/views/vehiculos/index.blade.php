<!-- resources/views/vehiculos/index.blade.php -->
@extends('layouts.app')

@section('title', 'Gestión de Vehículos')

@section('content')
    <div class="card">
        <div class="card-content">
            <a href="{{ route('contribuyente.dashboard') }}" class="btn-flat waves-effect waves-light left">
                Volver
                <i class="material-icons left">arrow_back</i>
            </a>
            <span class="card-title center">Gestión de Vehículos
                
                <a class="btn waves-effect waves-light right teal" href="{{ route('vehiculos.create') }}">
                    Registrar Vehículo
                    <i class="material-icons left">add</i>
                </a>
            </span>
            <table class="highlight">
                <thead>
                    <tr class="center">
                        <th>Placa</th>
                        <th>Tipo</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Color</th>
                        <th>Año</th>
                        {{-- <th>Valor Fiscal</th> --}}
                        <th>Ejes</th>
                        {{-- <th>Fecha de Registro</th> --}}
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vehiculos as $vehiculo)
                        <tr>
                            <td> <a href="#"> {{ $vehiculo->placa }}</a> </td>
                            <td>{{ $vehiculo->tipoVehiculo->nombre }}</td>
                            <td>{{ $vehiculo->marca->nombre }}</td>
                            <td>{{ $vehiculo->modelo }}</td>
                            <td>{{ $vehiculo->color->nombre }}</td>
                            <td>{{ $vehiculo->año }}</td>
                            {{-- <td>{{ $vehiculo->valor_fiscal }} Bs</td> --}}
                            <td>{{ $vehiculo->ejes }}</td>
                            {{-- <td>{{ $vehiculo->fecha_registro }}</td> --}}
                            <td>
                                <a href="{{ route('vehiculos.edit', $vehiculo) }}" class="btn-small waves-effect waves-light teal">Editar</a>
                                <form action="{{ route('vehiculos.destroy', $vehiculo) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-small waves-effect waves-light red" onclick="return confirm('¿Estás seguro de que deseas eliminar este vehículo?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-action">
            <!-- Puedes añadir enlaces adicionales aquí si lo necesitas -->
        </div>
    </div>
@endsection
