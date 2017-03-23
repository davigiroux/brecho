@extends('layouts.admin')
@section('content')
<div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="panel panel-default">
                  <div class="panel-heading">
                    <h5><b>Produto:</b> Bregueneits</h5>
                  </div>

                  <div class="panel-body">
                    <form action="/adicionar-imagem" method="POST">
                        <div class="form-group">
                            <label for="adicionarImagem">Adicionar imagem</label>
                            <input type="file" id="adicionarImagem" name="adicionarImagem" multiple/>
                        </div>
                        <button type="submit" class="btn btn-default">Salvar</button>
                    </form>
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
