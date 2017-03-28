<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //
    protected $table = 'produto';

    public function imagens(){
      return $this->hasMany('produtoimagem', 'idProduto', 'id');
    }
}
