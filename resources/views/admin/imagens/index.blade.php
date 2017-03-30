@extends('layouts.admin')
@section('content')
<div class="container">
      <div class="row">
          <div class="col-md-12">      
              <div class="panel panel-default">
                  <div class="panel-heading">
                    <a href="{{route('admin-produtos')}}">Produtos</a> / Imagens
                  </div>
                  <div class="panel-body">
                    <div class="jumbotron">
                      <h2>Produto: <b>{{$produto->nome}}</b></h2>                    
                      <form action="/admin/imagens/adicionar-imagem" method="POST" enctype="multipart/form-data">
                      {!! csrf_field() !!}
                          <div class="form-group">
                              <label for="imagem">Adicionar imagem</label>
                              <input type="file" id="imagem" name="imagem[]" multiple/>
                          </div>
                          <hr>
                          <button type="submit" class="btn btn-primary">Enviar arquivos</button>
                          <input type="hidden" name="idProduto" id="idProduto" value="{{$produto->id}}">
                      </form>
                    </div>
                    <div class="row" style="margin: 20px;">
                      <h4>Imagens do produto:</h4>
                      @if($imgs->isEmpty())
                        <i>Nenhuma imagem adicionada.</i>
                      @else 
                      @foreach ($imgs as $img)
                      <div class="col-md-2">
                        <div class="thumbnail">
                          <img src="{{Storage::url($img->imagem)}}" alt="imagem">
                        </div>
                      </div>                     
                      @endforeach
                      @endif
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endsection
