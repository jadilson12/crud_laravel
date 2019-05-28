<?php

Route::get('/produtos','ProdutoController@indexView');

Route::get('/',function(){
    return redirect('/produtos');
});

Route::prefix('/categorias')->group(function () {
    Route::get('/','CategoriaController@index');
    Route::get('/novo','CategoriaController@create');
    Route::get('/apagar/{id}','CategoriaController@destroy');
    Route::get('/editar/{id}','CategoriaController@edit');
    Route::post('/{id}','CategoriaController@update');
    Route::post('/','CategoriaController@store');

});

Route::get('/clientes','ClienteController@index');
Route::get('/json','ClienteController@indexjson');

