  @extends('layouts.admin')

  @section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="panel panel-default">
                  <div class="panel-heading">
                    Pedidos
                  </div>

                  <div class="input-group" style="float: right; width: 300px; margin: 5px; margin-right: 15px;">
                      <input id="filter" type="text"  width="100%" class="form-control" placeholder="O que deseja buscar?">
                  </div>
                  <div class="panel-body">
                    <table class="table table-striped table-bordered">
                      <thead>
                      <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Data de Pedido</th>
                        <th>Produto</th>
                      </tr>
                      </thead>
                      <tbody class="searchable">
                        @foreach ($pedidos as $pedido)
                        <tr>
                          <th scope="row">{{ $pedido->id }}</th>
                          <td valign="middle">{{ $pedido->nome }}</td>
                          <td valign="middle">{{ $pedido->email}}</td>
                          <td valign="middle">{{ $pedido->telefone}}</td>
                          <td valign="middle">{{ $pedido->created_at->format('d/m/Y - H:m:i') }}</td>
                          <td valign="middle">{{ $pedido->produto->nome }}</td>
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
