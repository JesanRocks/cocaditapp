<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Cocada - Control Operativo de Cobros Administración de Deudas y Aportes')</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet" />
    <style>
        .navbar {
            background-color: #795548;
            /* Marrón */
        }

        .sidenav a {
            color: white;
            /* Texto blanco para enlaces en el menú lateral */
        }

        .dropdown-content {
            min-width: 200px;
            /* Aumenta el ancho mínimo del dropdown */
            z-index: 1000;
            /* Asegúrate de que el dropdown esté en la parte superior */
        }

        .dropdown-trigger {
            display: flex;
            /* Usar flexbox para alinear el contenido */
            align-items: center;
            /* Alinear verticalmente el ícono y el texto */
        }

        .dropdown-trigger .material-icons {
            margin-right: 8px;
            /* Espacio entre el ícono y el texto */
        }
    </style>
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar">
            @auth
                <ul class="left">
                    <li><a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i
                                class="material-icons">menu</i></a></li>
                </ul>
            @endauth
            <a href="#" class="brand-logo center">COCADA</a>
            @auth
                <ul class="right">
                    <li>
                        <a class="dropdown-trigger" href="#" data-target="dropdown1"><i
                                class="material-icons">account_circle</i> Perfil</a>
                        <ul id="dropdown1" class="dropdown-content">
                            <li>
                                <a class="grey-text center" href="">
                                    {{ Auth::user()->nombres }} <br> {{ Auth::user()->cedula }}
                                </a>
                            </li>
                            <li class="divider"></li>
                            @if (request()->is('funcionario*'))
                                <li><a href="#!"><i class="material-icons">update</i> Actualizar datos</a></li>
                                <li><a href="#!"><i class="material-icons">settings</i> Configuración</a></li>
                                <li class="divider"></li>
                                <li>
                                    <form id="logout-form-funcionario" action="{{ route('funcionario.logout') }}"
                                        method="POST" style="display: none">@csrf</form>
                                    <a href="#"
                                        onclick="event.preventDefault(); document.getElementById('logout-form-funcionario').submit();">
                                        <i class="material-icons">close</i> Cerrar sesión
                                    </a>
                                </li>
                            @endif

                            @if (request()->is('contribuyente*'))
                                <li><a href="#!"><i class="material-icons">update</i> Actualizar datos</a></li>
                                <li><a href="#!"><i class="material-icons">settings</i> Configuración</a></li>
                                <li class="divider"></li>
                                <li>
                                    <form id="logout-form-contribuyente" action="{{ route('contribuyente.logout') }}"
                                        method="POST" style="display: none">@csrf</form>
                                    <a href="#"
                                        onclick="event.preventDefault(); document.getElementById('logout-form-contribuyente').submit();">
                                        <i class="material-icons">close</i> Cerrar sesión
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </li>
                </ul>
            @else
                <ul class="right">
                    <li>
                        <a class="dropdown-trigger" href="#" data-target="dropdown1"><i
                                class="material-icons">arrow_drop_down</i>Ingresar</a>
                        <ul id="dropdown1" class="dropdown-content">
                            <li><a href="{{ route('contribuyente.login.form') }}"><i
                                        class="material-icons">nature_people</i> Contribuyente</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('funcionario.login.form') }}"><i
                                        class="material-icons">supervisor_account</i> Funcionario</a></li>
                        </ul>
                    </li>
                </ul>
            @endauth
        </nav>

        <!-- Menú lateral contribuyente-->
        @if (request()->is('contribuyente*'))
            <ul id="slide-out" class="sidenav">
                <li><a href="{{ route('vehiculos.index') }}"><i class="material-icons">directions_car</i> Vehiculos</a></li>
                <li><a href="{{ route('pagos.index') }}"><i class="material-icons">payment</i> Pagos</a></li>
                <li><a href="#!"><i class="material-icons">info</i> Permisos</a></li>
                <li><a href="#!"><i class="material-icons">apps</i> Otros</a></li>
            </ul>
        @endif

        <!-- Menú lateral funcionario-->
        @if (request()->is('funcionario*'))
            <ul id="slide-out" class="sidenav">
                <li><a href="#!"><i class="material-icons">note_add</i>Facturación</a></li>
                <li><a href="#!"><i class="material-icons">monetization_on</i>Liquidacion</a></li>
                <li><a href="#!"><i class="material-icons">search</i> Fiscalización</a></li>
                <li><a href="#!"><i class="material-icons">apps</i> Otros</a></li>
            </ul>
        @endif

    </header>

    <main>
        <div class="container content">
            @yield('content')
        </div>
    </main>

    <footer class="page-footer brown">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Cocada</h5>
                    <p class="grey-text text-lighten-4">Control Operativo de Cobros Administración de Deudas y Aportes.
                    </p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text"><i class="fa-solid fa-globe"></i> Redes sociales</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!"><i class="fa-brands fa-facebook"></i> Facebook</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!"><i class="fa-brands fa-x-twitter"></i> X</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2024 Copyright C.OC.A.D.A. Developed by <b><a class="grey-text text-lighten-2"
                        href="#">@JesanRocks</a></b>
                <a class="grey-text text-lighten-4 right" href="#!"><i class="fa-solid fa-headset"></i> Soporte</a>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    {{-- Fontawesome --}}
    <script src="https://kit.fontawesome.com/b2e0d0a9e6.js" crossorigin="anonymous"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            M.AutoInit();
        });
    </script>
</body>

</html>
