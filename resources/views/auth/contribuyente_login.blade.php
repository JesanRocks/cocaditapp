@extends('layouts.app')

@section('title', 'Contribuyenye | Login')

@section('content')
    <div class="container">
        <div class="row">
            {{-- <div class="col s12 m6 offset-m3"> --}}
            <div class="card horizontal light-green lighten-4">

                <div class="card-image center valign-wrapper hide-on-small-only show-on-medium-and-up">
                    <div class="center-align"><img src="/img/icon.svg" alt="cocada logo" /></div>
                </div>

                <div class="card-stacked">
                    <div class="card-content">
                        <div class="center-align show-on-small hide-on-med-and-up">
                            <img src="/img/icon.svg" alt="cocada logo" width="30%" />
                            <span class="card-title center-align">Iniciar Sesión</span>
                            <h5>Contribuyente</h5> 
                        </div>
                        <div class="center hide-on-small-only show-on-medium-and-up">
                            <i class="material-icons">nature_people</i><br>
                            <b> Iniciar Sesión</b><br>
                            <small> Contribuyente</small>
                        </div>
                        <form action="{{ route('contribuyente.login') }}" method="POST">
                            @csrf

                            <div class="input-field">
                                <i class="material-icons prefix">account_circle</i>
                                <input type="text" id="login" name="login" required>
                                <label for="login">Correo o Cédula</label>
                            </div>
                            <div class="input-field">
                                <i class="material-icons prefix">lock</i>
                                <input type="password" id="password" name="password" required>
                                <label for="password">Contraseña</label>
                            </div>
                            <div class="input-field center">
                                <button type="submit" class="btn waves-effect waves-light">
                                    Iniciar sesión
                                    <i class="material-icons left">send</i>
                                </button>
                            </div>
                        </form>
                        
                        <p class="align-left">¿Todavía no te has registrado? <a href="{{ route('contribuyente.register') }}">Regístrate aquí</a>.</p>
                    </div>
                    
                </div>
                
            </div>
            {{-- </div> --}}
        </div>
    </div>
@endsection
