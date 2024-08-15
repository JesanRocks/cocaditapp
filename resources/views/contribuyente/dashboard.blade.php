@extends('layouts.app')

@section('title', 'Contribuyente | Dashboard')

@section('content')
    <div class="container">
        <div>
            <div class="center-align">
                <img src="/img/icon.svg" alt="cocada logo" width="15%">
            </div>

            <h5>Bienvenido al <b>Control Operativo de Cobros Administración de Deudas y Aportes</b></h5>

            <blockquote>
                Estimado <b>Contribuyente, <i>{{Auth::user()->nombres}} {{Auth::user()->apellidos}}</i></b>.
                <br><br>
                Realiza todos tus trámites relacionados con el tributo municipal de manera fácil y rápida, desde la
                comodidad de tu hogar o desde cualquier lugar. Nuestra plataforma te permite gestionar tus obligaciones
                tributarias con la máxima eficiencia y modernidad, simplificando cada paso del proceso.
                <br><br>
                Disfruta de una experiencia fluida y conveniente, diseñada para adaptarse a tus necesidades y facilitarte el
                cumplimiento de tus responsabilidades fiscales.
                <br><br>
            </blockquote>
        </div>
    </div>
@endsection
