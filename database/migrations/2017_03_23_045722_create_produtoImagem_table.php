<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoImagemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtoImagem', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idProduto')->unsigned();
            $table->text('imagem');
            $table->timestamps();
        });

        Schema::table('produtoImagem', function(Blueprint $table) {
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
        Schema::dropIfExists('produtoImagem');
    }
}
