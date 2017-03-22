  @extends('layouts.admin')

  @section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="panel panel-default">
                  <div class="panel-heading">
                    <a href="{{ url('/admin/produtos') }}">Produtos</a> / Adicionar
                  </div>

                  <div class="panel-body">
                    <form>
                      <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" placeholder="Nome">
                      </div>
                      <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" name="descricao" placeholder="Descrição">
                      </div>

                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endsection