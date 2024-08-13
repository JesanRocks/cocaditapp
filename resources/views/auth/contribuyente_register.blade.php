@extends('layouts.app')

@section('title', 'Contribuyente | Registro')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m8 offset-m2">
                <h2>Registro de Contribuyente</h2>
                @if (session('success'))
                    <div class="card-panel green lighten-4 green-text text-darken-4">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('contribuyente.register') }}" method="POST">
                    @csrf
                    <div class="input-field">
                        <input type="text" id="cedula" name="cedula" value="{{ old('cedula') }}" required>
                        <label for="cedula">Cédula</label>
                        @error('cedula')
                            <span class="red-text">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <input type="text" id="nombres" name="nombres" value="{{ old('nombres') }}" required>
                        <label for="nombres">Nombres</label>
                        @error('nombres')
                            <span class="red-text">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <input type="text" id="apellidos" name="apellidos" value="{{ old('apellidos') }}" required>
                        <label for="apellidos">Apellidos</label>
                        @error('apellidos')
                            <span class="red-text">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <input type="text" id="rif" name="rif" value="{{ old('rif') }}" required>
                        <label for="rif">RIF</label>
                        @error('rif')
                            <span class="red-text">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <input type="text" id="razon_social" name="razon_social" value="{{ old('razon_social') }}"
                            required>
                        <label for="razon_social">Razón Social</label>
                        @error('razon_social')
                            <span class="red-text">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <input type="email" id="correo" name="correo" value="{{ old('correo') }}" required>
                        <label for="correo">Correo Electrónico</label>
                        @error('correo')
                            <span class="red-text">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <input type="text" id="telefono" name="telefono" value="{{ old('telefono') }}">
                        <label for="telefono">Teléfono</label>
                        @error('telefono')
                            <span class="red-text">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <input type="text" id="num_habitacion" name="num_habitacion"
                            value="{{ old('num_habitacion') }}">
                        <label for="num_habitacion">Número de Habitación</label>
                        @error('num_habitacion')
                            <span class="red-text">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <textarea id="direccion" name="direccion" class="materialize-textarea">{{ old('direccion') }}</textarea>
                        <label for="direccion">Dirección</label>
                        @error('direccion')
                            <span class="red-text">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <input type="password" id="password" name="password" required>
                        <label for="password">Contraseña</label>
                        @error('password')
                            <span class="red-text">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <input type="password" id="password_confirmation" name="password_confirmation" required>
                        <label for="password_confirmation">Confirmar Contraseña</label>
                    </div>
                    <div class="input-field">
                        <button type="submit" class="btn waves-effect waves-light">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
