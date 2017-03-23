<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtoPedido', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idProduto')->unsigned();
            $table->string('nome');
            $table->string('email');
            $table->string('telefone');
            $table->timestamps();
        });
        Schema::table('produtoPedido', function(Blueprint $table) {
          $table->foreign('idProduto')->references('id')->on('produto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtoPedido');
    }
}
