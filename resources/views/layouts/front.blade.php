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
    <link href="https://fonts.googleapis.com/css?family=Roboto|Source+Sans+Pro" rel="stylesheet">
    <link href="{{ asset('css/front.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/modal-image.css') }}" rel="stylesheet"> 

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
        <div class="mdl-layout mdl-js-layout">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row">
                <span class="mdl-layout__title">Brechó</span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="{{ route('vitrine') }}">Ver Produtos</a>
                    <a class="mdl-navigation__link" href="#">Contato</a>
                </nav>
                </div>
            </header>
            <!--Mensagens flash --> 
            <div class="container">
                @include ('flash::message')
            </div>
            <!--Content --> 
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
    <script>
        function reply_click(clicked_id)
        {
            // Get the modal
            var modal = document.getElementById('myModal');

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById(clicked_id);
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            img.onclick = function(){
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() { 
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
