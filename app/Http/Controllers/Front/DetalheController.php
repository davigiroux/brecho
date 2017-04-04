<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Contracts\Filesystem\Filesystem;

class DetalheController extends Controller
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


    public function index($id)
    {
        $produto = \App\Produto::find($id);
        $imgs = \App\Produto::find($id)->imagens;
        return view('front/detalhe', [
            'produto' => $produto,
            'imgs'    => $imgs
        ]);
    }

}