@extends('layouts.front')
@section('content')
<div class="informacao-produto">
    <div class="titulo">
        {{$produto->nome}}
    </div>
    <div class="content">
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--10-col">   
                Descrição<br> 
                <p>{{$produto->descricao}}</p>
            </div>
            <div class="mdl-cell mdl-cell--2-col">  
                <b>R$ {{number_format($produto->valor, 2, ',', '.')}}</b>
            </div>
        </div>
    </div>
    <hr>
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--12-col">
            <h3>Fotos</h3>
        </div>
        @if($imgs->isEmpty())
        <i>Nenhuma imagem adicionada.</i>
        @else 
        @foreach($imgs as $img) 
        <div class="mdl-cell mdl-cell--3-col" align="center">
            <img id="{{$img->id}}" onclick="reply_click(this.id)" src="{{ Storage::url($img->imagem) }}" alt="{{$produto->nome}}" width="180" height="130" style="border: solid 1px; border-color: black;" class="myImg">
            <div class="mdl-tooltip" for="{{$img->id}}">
                {{$produto->nome}}
            </div>
            <!-- The Modal -->
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
    <div style="padding: 10px; margin-top:15px;">
        <a href="" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent mdl-js-ripple-effect" id="btn1">Eu quero!</a>
        <a href="" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect" id="btn1">Voltar aos produtos</a>
    </div>
</div>
@endsection