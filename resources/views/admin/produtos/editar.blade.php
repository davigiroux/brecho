@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <a href="{{ url('/admin/produtos') }}">Produtos</a> / Editar
                </div>

                <div class="panel-body">
                  <h3>Editando {{$produto->nome}}</h3>
                  <form action="/admin/produtos/adicionar" method="PUT">
                    {!! csrf_field() !!}
                    <div class="form-group">
                      <label for="nome">Nome</label>
                      <input type="text" class="form-control" name="nome" placeholder="Nome" value="{{$produto->nome}}">
                    </div>
                    <div class="form-group">
                      <label for="descricao">Descrição</label>
                      <input type="text" class="form-control" name="descricao" placeholder="Descrição" value="{{$produto->descricao}}">
                    </div>
                    <div class="form-group">
                      <label for="valor">Valor</label>
                      <input type="text" class="form-control" name="valor" placeholder="Valor" value="{{$produto->valor}}">
                    </div>
                    <div class="form-group">
                      <label for="ordem">Ordem</label>
                      <input type="text" class="form-control" name="ordem" placeholder="Ordem" value="{{$produto->ordem}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Salvar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
