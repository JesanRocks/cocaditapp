@extends('layouts.app')

@section('title', 'Funcionario | Login')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Login Funcionario</span>
                        <form action="{{ route('funcionario.login') }}" method="POST">
                            @csrf
                            <div class="input-field">
                                <input type="text" id="login" name="login" required>
                                <label for="login">Correo o Cédula</label>
                            </div>
                            <div class="input-field">
                                <input type="password" id="password" name="password" required>
                                <label for="password">Contraseña</label>
                            </div>
                            <div class="input-field">
                                <button type="submit" class="btn waves-effect waves-light">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
