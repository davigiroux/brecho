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
                        @for ($i = 0; $i < 10; $i++)
                        <tr>
                          <th scope="row">1</th>
                          <td>Abajur tabajara something só amanhã</td>
                          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                          <td>$ 1.234,56</td>
                          <td><a href="{{url('admin/imagens')}}">Imagens</a></td>
                          <td>
                            <a href="{{ url('/admin/produtos/editar/1') }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a href="{{ url('/admin/produtos/excluir/1') }}" class="btn btn-warning btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                          </td>
                        </tr>
                        @endfor
                      </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endsection
