@extends('layouts.front')
@section('content')
<div class="informacao-produto">
    <div class="titulo">
        {{$produto->nome}}
    </div>
    <hr>
    <div class="content">
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--10-col">   
                Descrição<br> 
                <p>{{$produto->descricao}}</p>
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
            <img id="{{$img->id}}" onclick="imagem(this)" src="{{ Storage::url($img->imagem) }}" alt="{{$produto->nome}}" width="100%" height="80%" class="myImg">
            
            <!-- Modal da imagem -->
            <div id="modal01" class="w3-modal w3-animate-opacity" onclick="this.style.display='none'">
                <img class="w3-modal-content" id="img-content" style="width:80%; height:70%">
            </div>
        </div>
        @endforeach
        @endif
    </div>
    <div style="padding: 10px;" class="mdl-grid">
        <div class="mdl-cell mdl-cell--3-col">  
            <h3><b>R$ {{number_format($produto->valor, 2, ',', '.')}}</b></h3>
        </div>
        <div class="mdl-cell mdl-cell--9-col" align="right" style="margin-top: 18px;">
            <button style="margin: 5px;" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent mdl-js-ripple-effect dialog-button" onclick="setIdProduto({{$produto->id}})">Eu quero!</button>
            <a href="{{ route('vitrine') }}" style="margin: 5px;" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect" id="btn1">Voltar aos produtos</a>
        </div>
    </div>
</div>
@endsection