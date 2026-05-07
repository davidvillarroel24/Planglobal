<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Sistema')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- AdminLTE --}}
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    {{-- FontAwesome --}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="hold-transition layout-top-nav">

<div class="wrapper">

    {{-- Navbar Superior --}}
    <nav class="main-header navbar navbar-expand-md navbar-dark navbar-primary">

        <div class="container">

            {{-- Logo --}}
            <a href="{{ route('dashboard') }}" class="navbar-brand">
                <span class="brand-text font-weight-light">
                    Mi Sistema
                </span>
            </a>

            {{-- Botón responsive --}}
            <button class="navbar-toggler" type="button"
                    data-toggle="collapse"
                    data-target="#navbarCollapse">

                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- Menú --}}
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}"
                           class="nav-link">
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#"
                           class="nav-link">
                            Usuarios
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#"
                           class="nav-link">
                            Reportes
                        </a>
                    </li>

                </ul>

                {{-- Derecha --}}
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <span class="nav-link">
                            {{ Auth::user()->name ?? 'Usuario' }}
                        </span>
                    </li>

                    <li class="nav-item">
                        <form method="POST"
                              action="{{ route('logout') }}">
                            @csrf

                            <button type="submit"
                                    class="btn btn-link nav-link"
                                    style="border: none;">
                                Salir
                            </button>
                        </form>
                    </li>

                </ul>

            </div>

        </div>
    </nav>

    {{-- Contenido --}}
    <div class="content-wrapper">

        <div class="content pt-4">

            <div class="container">

                @yield('content')

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</body>
</html>