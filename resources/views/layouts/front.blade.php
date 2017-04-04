<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
     <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-red.min.css" /> 
    <link href="{{ asset('css/front.css') }}" rel="stylesheet"> 

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script src="https://use.fontawesome.com/c4621f41f5.js"></script>
</head>
<body>
    <div id="app">
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row">
                    <span class="mdsl-layout-title">Brechó</span>
                    <div class="mdl-layout-spacer"></div>
                    <nav class="mdl-navigation mdsl-layout--large-screen-only">
                        <a href="" class="mdl-navigation__link">Ver produtos!</a>
                        <a href="" class="mdl-navigation__link">Contato</a>
                    </nav>
                </div>
            </header>
            <!--Mensagens flash --> 
            <div class="container">
                @include ('flash::message')
            </div>
            <!-- Content -->
            <main class="mdl-layout__content">
                @yield('content')
            </main>
        </div>
        <div class="mdl-layout mdl-js-layout">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row">
                <span class="mdl-layout__title">Brechó</span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="#">Ver Produtos</a>
                    <a class="mdl-navigation__link" href="#">Contato</a>
                </nav>
                </div>
            </header>
            <main class="mdl-layout__content content">
                @yield('content')
            </main>
            </div>
        </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <script>
        $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>
</body>
</html>
