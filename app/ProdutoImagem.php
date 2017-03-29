<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoImagem extends Model
{
    //
    protected $table = 'produtoimagem';

    public function produto(){
        return $this->belongsTo('Produto');
    }
}
