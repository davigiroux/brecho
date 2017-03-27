@extends('layouts.admin')
@section('content')
<div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="panel panel-default">
                  <div class="panel-heading">
                    <h5>Imagens</h5>
                  </div>
                  <div class="panel-body">
                    <div class="jumbotron">
                      <h2>Produto: <b>Bregeneits</b></h2>
                      <form action="/admin/imagens/adicionar-imagem" method="POST" enctype="multipart/form-data"> 
                      {!! csrf_field() !!}
                          <div class="form-group">
                              <label for="imagem">Adicionar imagem</label>
                              <input type="file" id="imagem" name="imagem[]" multiple/>
                          </div>
                          <hr>
                          <button type="submit" class="btn btn-primary">Enviar arquivos</button>
                      </form>
                    </div>
                    <div class="row" style="margin: 20px;">
                      <h4>Imagens do produto:</h4>
                      <div class="col-md-2">
                        <div class="thumbnail">
                          <img src="http://i.imgur.com/wodor6Y.png" alt="imagem">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="thumbnail">
                          <img src="http://i.imgur.com/wodor6Y.png" alt="imagem">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="thumbnail">
                          <img src="http://i.imgur.com/wodor6Y.png" alt="imagem">
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endsection
