@extends('layouts.app')

@section('title', 'Funcionario | Dashboard')

@section('content')
    <div class="container">
        <div>
            <div class="center-align">
                <img src="/img/icon.svg" alt="cocada logo" width="15%">
            </div>

            <h5>Bienvenido al <b>Control Operativo de Cobros Administración de Deudas y Aportes</b></h5>

            <blockquote>
                Estimado <b>Funcionario, <i>{{Auth::user()->nombres}} {{Auth::user()->apellidos}}</i></b>.
                <br><br>
                ¡Bienvenido a nuestro innovador sistema de gestión tributaria en línea! Como pieza clave en la
                administración de la información de los contribuyentes, te ofrecemos una herramienta avanzada diseñada para
                facilitar y optimizar tu labor.
                <br><br>
                Desde cualquier lugar, podrás gestionar y supervisar los datos tributarios de manera rápida y segura,
                aprovechando la tecnología de vanguardia para simplificar tus tareas. Nuestra plataforma está pensada para
                hacer tu trabajo más ágil y eficiente, asegurando una experiencia fluida y sin complicaciones.
                <br><br>
                Nos enorgullece ofrecerte un servicio moderno y efectivo, alineado con los estándares más altos de calidad.
                Estamos aquí para apoyarte en cada paso del camino.<br><br>
            </blockquote>
        </div>
    </div>
@endsection
