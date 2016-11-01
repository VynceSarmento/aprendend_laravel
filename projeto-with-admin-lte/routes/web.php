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

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
Route::post('/produtos/atualizar', 'ProdutoController@atualizar');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');
Route::get('/produtos/alterar/{id}', 'ProdutoController@alterar');
Route::get('/produtos/excluir/{id}', 'ProdutoController@excluir');