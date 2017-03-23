  @extends('layouts.admin')

  @section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="panel panel-default">
                  <div class="panel-heading">
                    <a href="{{ route('admin-produtos') }}">Produtos</a> / Adicionar
                  </div>

                  <div class="panel-body">
                    <form action="/admin/produtos/adicionar" method="POST">
                      {!! csrf_field() !!}
                      <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" placeholder="Nome">
                      </div>
                      <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" name="descricao" placeholder="Descrição">
                      </div>
                      <div class="form-group">
                        <label for="valor">Valor</label>
                        <input type="text" class="form-control" name="valor" placeholder="Valor">
                      </div>
                      <div class="form-group">
                        <label for="ordem">Ordem</label>
                        <input type="text" class="form-control" name="ordem" placeholder="Ordem">
                      </div>

                      <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endsection
