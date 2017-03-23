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

Route::get('/admin/imagens', 'Admin\ImagensController@index')->name('admin-imagens');

Route::get('/admin/pedidos', 'Admin\PedidosController@index')->name('admin-pedidos');
