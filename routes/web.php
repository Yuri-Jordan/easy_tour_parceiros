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
    return view('index');
})->name('home');

Route::group( ['prefix' => 'admin'], function(){

    Route::group(['prefix' => 'cadastrar'], function(){

      Route::get('/{acao}',  [
        'uses' => 'NavegacaoController@getPaginasCadastrar',
        'as' => 'getPaginaCadastrar'
      ]);
    });

    Route::get('/{acao}',  [
      'uses' => 'NavegacaoController@getPaginasListar',
      'as' => 'getPaginaListar'
    ]);

});

Route::resource('parceiros', 'ParceiroController');
