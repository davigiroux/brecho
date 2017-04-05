<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoPedido extends Model
{
    //
    protected $table = 'produtopedido';

    public function produto(){
        return $this->belongsTo('App\Produto', 'idProduto', 'id');
    }
}
