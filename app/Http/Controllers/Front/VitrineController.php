<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Contracts\Filesystem\Filesystem;

class VitrineController extends Controller
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


    public function index()
    {
        $imagens = \App\ProdutoImagem::all();
        $unique_imgs = [];
        $unique_idProduto = [];
        foreach($imagens as $imagem){
            if(!in_array($imagem->idProduto, $unique_idProduto)){
                array_push($unique_imgs, $imagem->id);
                array_push($unique_idProduto, $imagem->idProduto);
            }
        }
        $imgs = [];
        foreach($unique_imgs as $idImagem){
            array_push($imgs, \App\ProdutoImagem::find($idImagem));
        }
        return view('front/vitrine', compact('imgs'));
    }

}