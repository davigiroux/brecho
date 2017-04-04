@extends('layouts.front')
@section('content')

<div class="mdl-grid">
        <div class="mdl-cell mdl-cell--12-col"><h3>Galeria de Produtos</h3></div>
        @foreach($imgs as $img) 
        <div class="mdl-cell mdl-cell--4-col">
            <div class="mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title" style="background: url({{ Storage::url($img->imagem) }}) center / cover; height: 200px;">
                </div>
                <div class="mdl-card__supporting-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Mauris sagittis pellentesque lacus eleifend lacinia...
                </div>
                <div class="mdl-card__actions mdl-card--border" align="center">
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">Eu quero!</button>
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent mdl-js-ripple-effect">Detalhes</button>
                </div>
            </div>
        </div>
        @endforeach
</div>
@endsection