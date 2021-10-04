<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>{{ config('app.name', 'Map-OS') }}</title>
    <meta name="title" content="Map-OS">
    <meta name="description" content="Sistema de Controle de Ordens de Serviço">
    <meta name="keywords" content="Map-OS, admin, OS, Ordem de Serviço, Laravel, dashboard">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mapos.com.br">
    <meta property="og:title" content="Map-OS">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ global_asset('favicon.ico') }}">

    <!-- core css -->
    <link href="{{ global_asset('css/app.css') }}" rel="stylesheet">

    <link type="text/css" href="{{ global_asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

</head>

<body class="bg-soft">

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ global_asset('js/app-min.js') }}"></script>

</body>

</html>
