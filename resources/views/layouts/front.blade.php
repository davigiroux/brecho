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
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-pink.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row">
                <span class="mdl-layout__title"><a href="/" class="logo">Brechó</a></span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="{{ route('vitrine') }}"><b>Ver Produtos</b></a>
                    <a class="mdl-navigation__link" href="{{ url('/login') }}"><b>Administrador</b></a>
                </nav>
                </div>
            </header>
            <div class="mdl-layout__drawer mdl-layout--small-screen-only">
                <span class="mdl-layout-title">Menu</span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="{{ route('vitrine') }}"><b>Ver Produtos</b></a>
                    <a class="mdl-navigation__link" href="{{ url('/login') }}"><b>Administrador</b></a>
                </nav>
            </div>
            <div class="container">
                @include ('flash::message')
            </div>
            <!--Content --> 
            <main class="mdl-layout__content content">
                @yield('content')
            </main>
        </div>

        <!-- Modal do formulário -->
        <div id="modal-form" class="w3-modal w3-animate-opacity">
            <div class="w3-modal-content" align="center">
                <div class="w3-container">
                    <span onclick="document.getElementById('modal-form').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <h3 class="mdl-dialog__title">Informe seus dados</h3>
                    <div class="mdl-dialog__content">
                        <p>
                        Preencha os campos para entrarmos em contato!
                        </p>
                        <form action="/adicionar-pedido" method="POST">
                            {!! csrf_field() !!}
                            <input type="hidden" id="idProdutoModal" name="idProdutoModal" value="">
                            <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="text" name="nome" id="nome"/>
                                <label class="mdl-textfield__label" for="nome">Nome</label>
                            </div><br>
                            <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="email" name="email" id="email"/>
                                <label class="mdl-textfield__label" for="email">E-mail</label>
                            </div><br>
                            <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="text" name="telefone" id="telefone"/>
                                <label class="mdl-textfield__label" for="telefone">Telefone</label>
                            </div><br>
                            <div>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect" onclick="alerta()" type="submit">Confimar</button>
                                <button type="button" class="mdl-button" onclick="document.getElementById('modal-form').style.display='none'">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="alerta" class="w3-modal">
            <div class="w3-modal-content">
                <div class="w3-container w3-pale-green">
                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <h2>Pedido enviado!</h2>
                </div>
            </div>
        </div>

    <!-- Scripts -->
    
    <script>
        function alerta(){
            document.getElementById('modal-form').style.display='none';
            document.getElementById('alerta').style.display='block';
        }

        function setIdProduto(id){
            document.getElementById('idProdutoModal').value = id;
            document.getElementById('modal-form').style.display='block';
        }
        function imagem(element) {
            document.getElementById("img-content").src = element.src;
            document.getElementById("modal01").style.display = "block";
        }
    </script> 
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
