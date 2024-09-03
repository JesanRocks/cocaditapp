<!-- resources/views/vehiculos/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Editar Vehículo')

@section('content')
    <div class="card">
        <div class="card-content">
            <a href="{{ route('vehiculos.index') }}" class="btn-flat waves-effect waves-light left">
                Volver
                <i class="material-icons left">arrow_back</i>
            </a>
            <span class="card-title center">Editar Vehículo</span>

            <form action="{{ route('vehiculos.update', $vehiculo->id) }}" method="POST">
                @csrf
                @method('PUT')
                <br>
                <div class="input-field">
                    <i class="material-icons prefix">commute</i>
                    <select name="tipo_vehiculo_id" id="tipo_vehiculo_id" required>
                        <option value="" disabled>Seleccione un Tipo de Vehículo</option>
                        @foreach ($tiposVehiculo as $tipo)
                            <option value="{{ $tipo->id }}" {{ $vehiculo->tipo_vehiculo_id == $tipo->id ? 'selected' : '' }}>{{ $tipo->nombre }}</option>
                        @endforeach
                    </select>
                    <label for="tipo_vehiculo_id">Tipo de Vehículo</label>
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">dashboard</i>
                    <select name="marca_id" id="marca_id" required>
                        <option value="" disabled>Seleccione una Marca</option>
                        @foreach ($marcas as $marca)
                            <option value="{{ $marca->id }}" {{ $vehiculo->marca_id == $marca->id ? 'selected' : '' }}>{{ $marca->nombre }}</option>
                        @endforeach
                    </select>
                    <label for="marca_id">Marca</label>
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">pages</i>
                    <input type="text" name="modelo" id="modelo" value="{{ old('modelo', $vehiculo->modelo) }}" required>
                    <label for="modelo">Modelo</label>
                    @error('modelo')
                        <span class="red-text text-darken-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">color_lens</i>
                    <select name="color_id" id="color_id" required>
                        <option value="" disabled>Seleccione un Color</option>
                        @foreach ($colores as $color)
                            <option value="{{ $color->id }}" {{ $vehiculo->color_id == $color->id ? 'selected' : '' }}>{{ $color->nombre }}</option>
                        @endforeach
                    </select>
                    <label for="color_id">Color</label>
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">event</i>
                    <input type="number" name="año" id="año" min="1900" max="{{ date('Y') }}" value="{{ $vehiculo->año }}" required>
                    <label for="año">Año de Fabricación</label>
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">build</i>
                    <input type="number" name="ejes" id="ejes" min="2" value="{{ $vehiculo->ejes }}" required>
                    <label for="ejes">Número de Ejes</label>
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">subtitles</i>
                    <input type="text" name="placa" id="placa" value="{{ old('placa', $vehiculo->placa) }}" required>
                    <label for="placa">Placa</label>
                    @error('placa')
                        <span class="red-text text-darken-2">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="input-field">
                    <i class="material-icons prefix">work</i>
                    <select name="tipo_uso" id="tipo_uso" required>
                        <option value="" disabled>Seleccione el Tipo de Uso</option>
                        <option value="particular" {{ $vehiculo->tipo_uso == 'particular' ? 'selected' : '' }}>Particular</option>
                        <option value="comercial" {{ $vehiculo->tipo_uso == 'comercial' ? 'selected' : '' }}>Comercial</option>
                    </select>
                    <label for="tipo_uso">Tipo de Uso</label>
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">attach_money</i>
                    <input type="number" name="valor_fiscal" id="valor_fiscal" step="0.01" value="{{ $vehiculo->valor_fiscal }}" required>
                    <label for="valor_fiscal">Valor Fiscal</label>
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">calendar_today</i>
                    <input type="date" name="fecha_registro" id="fecha_registro" value="{{ $vehiculo->fecha_registro }}" required>
                    <label for="fecha_registro">Fecha de Registro</label>
                </div>

                <div class="card-action center">
                    <button type="submit" class="btn waves-effect waves-light">
                        Guardar Cambios
                        <i class="material-icons left">save</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
