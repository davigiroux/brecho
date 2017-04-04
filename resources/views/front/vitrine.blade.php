@extends('layouts.front')
@section('content')

<div class="mdl-grid">
        <div class="mdl-cell mdl-cell--12-col"><h3>Galeria de Produtos</h3></div>
        @foreach($imgs as $img) 
        <div class="mdl-cell mdl-cell--4-col">
            <div class="card-image mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title" style="background: url({{ Storage::url($img->imagem) }}) center / cover; height: 170px;">
                </div>
                <div class="mdl-card__supporting-text">
                    <div class="valor" align="center">
                        <h4>{{$img->produto->nome}}</h4>
                        <b>R${{$img->produto->valor}}</b> <br>
                    </div>
                </div>
                <div class="mdl-card__actions mdl-card--border" align="center">
                    <a href="" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent mdl-js-ripple-effect" id="btn1">Eu quero!</a>
                    <a href="{{url('/detalhe/'.$img->produto->id)}}" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">Detalhes</a>
                </div>
            </div>
        </div>
        @endforeach
</div>
@endsection 