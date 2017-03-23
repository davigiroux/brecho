<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $produtos = \App\Produto::all();
        return view('admin/produtos/index', ['produtos' => $produtos]);
    }

    public function adicionar()
    {
        return view('admin/produtos/adicionar');
    }

    public function update(Request $request, $id)
    {
      $produto = \App\Produto::find($id);
      $produto->nome = $request->input('nome');
      $produto->descricao = $request->input('descricao');
      $produto->valor = (float) $request->input('valor');
      $produto->ordem = (integer) $request->input('ordem');
      $produto->save();
      return redirect('/admin/produtos');
    }

    public function adicionarProduto(Request $request)
    {
      $produto = new \App\Produto;
      $produto->nome = $request->nome;
      $produto->descricao = $request->descricao;
      $produto->valor = (float) $request->valor;
      $produto->ordem = (integer) $request->ordem;
      $produto->save();
      return redirect('/admin/produtos');
    }

    public function excluir($id)
    {
      \App\Produto::destroy($id);
      return redirect('/admin/produtos');
    }

    public function editar($id)
    {
        $produto = \App\Produto::find($id);
        return view('admin/produtos/editar', ['produto' => $produto]);
    }
}
