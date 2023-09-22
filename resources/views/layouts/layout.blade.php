<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('img/head.png') }}">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>
<body>
    <header>
        <div class="header__superior">
            <div class="logo">
                <img src="{{ asset('img/Recaudo y facturacion WEB.png') }}" alt="">
            </div>
            <div>
                <h2>GESTION DE PROCESOS DE RECAUDO Y FACTURACION</h2>
            </div>
            <div>
                <input type="search" class="icono-placeholder" placeholder="Buscar">
            </div>
        </div>
        <div class="container__menu">
            <div class="menu">
                <nav>
                    <!-- Tu menú de navegación aquí -->
                </nav>
            </div>
        </div>
    </header>

    <div class="content">
        @yield('content')
    </div>

    <div class="container-footer">
        <footer>
            <h4>
                ANALISIS Y DESARROLLO DE SOFTWARE. (2521972) - Aprendiz: Ricardo Parrado Forero - 
                Profesor: Fabian Rolando Caballero Cortes - 2023
            </h4>
        </footer>
    </div>
</body>
</html>
