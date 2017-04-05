<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Contracts\Filesystem\Filesystem;

class PedidoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function adicionar(Request $request)
    {
        $pedido = new \App\ProdutoPedido;
        $pedido->nome = $request->nome;
        $pedido->email = $request->email;
        $pedido->telefone = $request->telefone;
        $pedido->idProduto = $request->idProdutoModal;
        $pedido->save();
        return redirect('vitrine');
    }

}