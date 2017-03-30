<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
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
        $imgs = \App\Produto::find($produto->id)->imagens;
        return view('admin/imagens/index', compact('imgs', 'produto'));
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
              if(Storage::disk('public')->exists($nomeImagem)){
                flash()->warning('Imagem já adicionada!');
              } else {             
                $img = Image::make($arquivo);
                $img->fit(800, 700, function ($constraint) {
                    $constraint->aspectRatio();
                });
                Storage::disk('public')->put($nomeImagem, (string) $img->encode());
                $produtoImagem->imagem = $nomeImagem;
                $produtoImagem->save();
                flash()->success('Imagem salva com sucesso!');
              }
          }
        }
        $id = Input::get('idProduto');
        $produto = \App\Produto::find($id);
        $imgs = \App\Produto::find($produto->id)->imagens;
        return view('admin/imagens/index', compact('imgs', 'produto'));
    }
}
