<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Admin Home
Route::get('/admin', 'Admin\HomeController@index');

//Produtos
Route::get('/admin/produtos', 'Admin\ProdutosController@index')->name('admin-produtos');
Route::get('/admin/produtos/adicionar', 'Admin\ProdutosController@adicionar');
Route::post('/admin/produtos/adicionar', 'Admin\ProdutosController@adicionarProduto');
Route::get('/admin/produtos/excluir/{id}', 'Admin\ProdutosController@excluir');
Route::get('/admin/produtos/editar/{id}', 'Admin\ProdutosController@editar')->name('admin-produtos-editar');
Route::get('/admin/produtos/update/{id}', 'Admin\ProdutosController@update');

//Imagens
Route::get('/admin/imagens/{id}', 'Admin\ImagensController@index')->name('admin-imagens');
Route::post('/admin/imagens/adicionar-imagem', 'Admin\ImagensController@adicionar');
Route::get('/admin/imagens/excluir/{img}', 'Admin\ImagensController@excluir');

//Pedidos
Route::get('/admin/pedidos', 'Admin\PedidosController@index')->name('admin-pedidos');

//Vitrine
Route::get('/vitrine', 'Front\VitrineController@index')->name('vitrine');

//Detalhes do produto
Route::get('/detalhe/{id}', 'Front\DetalheController@index')->name('detalhe-produto');

//Pedido
Route::get('/pedido/{idProduto}/{idImagem}', 'Front\PedidoController@index')->name('pedido');