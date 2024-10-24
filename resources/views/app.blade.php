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
    <body>

        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
              <span class="navbar-brand mb-0 h1">Navbar</span>
            </div>
        </nav>

        <main>
            @hasSection ('body')
                @yield('body')
            @endif
        </main>


        <!-- Script -->
        @vite(['resources/js/app.js'])
    </body>
</html>