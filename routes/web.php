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

Route::get('/admin', 'Admin\HomeController@index');

Route::get('/admin/produtos', 'Admin\ProdutosController@index')->name('admin-produtos');
Route::get('/admin/produtos/adicionar', 'Admin\ProdutosController@adicionar');
Route::post('/admin/produtos/adicionar', 'Admin\ProdutosController@adicionarProduto');
Route::get('/admin/produtos/excluir/{id}', 'Admin\ProdutosController@excluir');
Route::get('/admin/produtos/editar/{id}', 'Admin\ProdutosController@editar')->name('admin-produtos-editar');
Route::get('/admin/produtos/update/{id}', 'Admin\ProdutosController@update');

Route::get('/admin/imagens', 'Admin\ImagensController@index')->name('admin-imagens');

Route::get('/admin/pedidos', 'Admin\PedidosController@index')->name('admin-pedidos');
