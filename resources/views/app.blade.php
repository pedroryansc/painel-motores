<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Painel de Motores</title>

        <!-- Fonts -->

        <!-- Styles -->
        @vite(['resources/css/app.scss'])
    </head>
    <body class="bg-light">

        <nav class="navbar bg-white">
            <div class="container-fluid justify-content-center">
                <span class="navbar-brand m-0">
                    <img src="{{ asset('imgs/logo.png') }}" height="45">
                </span>
            </div>
        </nav>
        <main class="container">
            @hasSection ('body')
                @yield('body')
            @endif
        </main>

        <!-- Script -->
        @vite(['resources/js/app.js'])
    </body>
</html>