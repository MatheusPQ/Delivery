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

//ROTAS DO CLIENTE
Route::get('/', 'ItemController@listar');
Route::group(['middleware' => 'auth'], function(){
    Route::get('/item/{id}', 'ItemController@mostrarItem');
    Route::post('/pedido/salvar', 'PedidoController@salvar')->name('pedido.salvar');
});
// ======================================================


//ROTAS DE ADMIN
Route::get('/produto', 'ItemController@listarAdmin');
Route::get('/produto/novo', 'ItemController@novoProduto');
Route::post('/produto/salvar', 'ItemController@salvarProduto')->name('produto.salvar');
// ======================================================
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
