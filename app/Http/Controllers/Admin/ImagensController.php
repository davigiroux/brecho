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
        $imgs = \App\Produto::find($id)->imagens;
        return view('admin/imagens/index', compact('produto', 'imgs'));
    }

    public function excluir($idImagem){
        $img = \App\ProdutoImagem::find($idImagem);
        Storage::disk('public')->delete($img->imagem);
        $id = $img->idProduto;
        flash($img->imagem.' excluída com sucesso.', 'warning')->important();
        $img->delete();
        $produto = \App\Produto::find($id);
        $imgs = \App\Produto::find($produto->id)->imagens;
        return redirect()->route('vitrine', [
            'id' => $id,
            'imgs' => $imgs
        ]);
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
                $resizedImg = Image::make($arquivo);
                $resizedImg->fit(1000, 900, function ($constraint) {
                    $constraint->aspectRatio();
                });
                Storage::disk('public')->put($nomeImagem,(string) $resizedImg->encode());  
                Storage::disk('local')->put($nomeImagem, file_get_contents($arquivo));
                $produtoImagem->imagem = $nomeImagem;
                $produtoImagem->save();
                flash()->success('Imagem salva com sucesso!');
              }
          }
        }
        $id = Input::get('idProduto');
        $produto = \App\Produto::find($id);
        $imgs = \App\Produto::find($produto->id)->imagens;
        return redirect()->route('admin-imagens', [
            'produto' => $produto,
            'imgs' => $imgs
        ]);
    }
}
