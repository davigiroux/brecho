  @extends('layouts.admin')

  @section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="panel panel-default">
                  <div class="panel-heading">
                    Produtos
                    <a href="{{ url('/admin/produtos/adicionar') }}" class="btn btn-success btn-xs pull-right"><i class="fa fa-plus"></i> Adicionar</a>
                  </div>

                  <div class="panel-body">
                    <table class="table table-striped">
                      <thead>
                      <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Descricao</th>
                        <th>Preço</th>
                        <th>Imagens</th>
                        <th></th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($produtos as $produto)
                        <tr>
                          <th scope="row">{{ $produto->id }}</th>
                          <td valign="middle">{{ $produto->nome }}</td>
                          <td valign="middle">{{ $produto->descricao}}</td>
                          <td valign="middle" style="min-width:100px;">R$ {{ $produto->valor }}</td>
                          <td valign="middle"><a href="{{ url('/admin/imagens') }}">Imagens</a></td>
                          <td>
                            <a href="{{ url('/admin/produtos/editar/'.$produto->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                          </td>
                          <td>
                            <a href="{{ action('Admin\ProdutosController@excluir', $produto->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endsection
