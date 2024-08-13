@extends('layouts.app')

@section('title', 'Contribuyenye | Login')

@section('content')
    <div class="container">
        <div class="row">
            {{-- <div class="col s12 m6 offset-m3"> --}}
            <div class="card horizontal">
                <div class="card-image center valign-wrapper">
                    <div class="center-align"><img src="/img/icon.svg" alt="cocada logo" /></div>
                    {{-- <span class="card-title center-align">Iniciar Sesión</span> --}}
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        {{-- <div class="center-align"><img src="/img/icon.svg" alt="cocada logo" width="30%" /></div>
                            <span class="card-title center-align">Iniciar Sesión</span> --}}
                        <div class="center"><b>Iniciar Sesión</b></div>
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
                    </div>
                </div>
                {{-- <div class="card-action">
                        <a href="#">This is a link</a>
                    </div> --}}
            </div>
            {{-- </div> --}}
        </div>
    </div>
@endsection
