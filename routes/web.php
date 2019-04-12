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

    // Vamos usar lista de produto como index
Route::get('/','ProdutoController@index');


Route::prefix('/produtos')->group(function () {
    Route::get('/','ProdutoController@index');
    Route::get('/novo','ProdutoController@create');
    Route::get('/apagar/{id}','ProdutoController@destroy');
    Route::get('/editar/{id}','ProdutoController@edit');
    Route::post('/{id}','ProdutoController@update');
    Route::post('/','ProdutoController@store');

});

Route::prefix('/categorias')->group(function () {
    Route::get('/','CategoriaController@index');
    Route::get('/novo','CategoriaController@create');
    Route::get('/apagar/{id}','CategoriaController@destroy');
    Route::get('/editar/{id}','CategoriaController@edit');
    Route::post('/{id}','CategoriaController@update');
    Route::post('/','CategoriaController@store');

});