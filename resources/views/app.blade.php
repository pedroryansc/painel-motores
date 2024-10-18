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

        <button class="btn btn-success">Botão</button>

        <!-- Script -->
        @vite(['resources/js/app.js'])
    </body>
</html>
