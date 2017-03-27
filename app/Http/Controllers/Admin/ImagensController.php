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

    
    public function index()
    {
        return view('admin/imagens/index');
    }

    public function adicionar(Request $request)
    {
        $imagens = Input::file('imagem');
        foreach($imagens as $arquivo)
        {
            Storage::disk('local')->put($arquivo->getClientOriginalName(), file_get_contents($arquivo));
        }
        return view('admin/imagens/index');
    }
}