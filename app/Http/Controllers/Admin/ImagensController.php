<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Filesystem\Filesystem;

class ImagensController extends Controller
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


    public function index($id)
    {
        $produto = \App\Produto::find($id);
        return view('admin/imagens/index', ['produto' => $produto]);
    }

    public function adicionar(Request $request)
    {
        
        if(Input::hasFile('imagem')){
          $imagens = Input::file('imagem');
          $idProduto = Input::get('idProduto');
          foreach($imagens as $arquivo)
          {
              $produtoImagem = new \App\ProdutoImagem;
              $produtoImagem->idProduto = $idProduto;
              $nomeImagem = pathinfo($arquivo->getClientOriginalName(), PATHINFO_FILENAME);
              $nomeImagem = date("Y-m-d",time())."-".str_slug($nomeImagem).".".$arquivo->getClientOriginalExtension();
              Storage::disk('public')->put($nomeImagem, file_get_contents($arquivo));
              $produtoImagem->imagem = Storage::url($nomeImagem);
              $produtoImagem->save();
              \Session::flash('flash_message', 'Imagem salva com sucesso!');
          }
        }
        $id = Input::get('idProduto');
        $produto = \App\Produto::find($id);
        return view('admin/imagens/index', ['produto' => $produto]);
    }
}
