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
    return view('home');
});

Route::get('produtos', 'MeuControlador@produtos'); 

Route::resource('clientes','ClienteControlador');

//Tratando os servicos 
Route::get('airbag', 'AirbagController@index')->name('site.airbag');
Route::get('AlinhamentoeBalanceamento', 'AlinhamentoController@index')->name('site.AlinhamentoeBalanceamento');
Route::get('ArCondicionado', 'ArCondicionadoController@index')->name('site.ArCondicionado');
Route::get('AutoEletrico', 'EletricoController@index')->name('site.AutoEletrico');
Route::get('Cambio', 'CambioController@index')->name('site.Cambio');
Route::get('Direcao', 'DirecaoController@index')->name('site.Direcao');
Route::get('Embreagem', 'EmbreagemController@index')->name('site.Embreagem');
Route::get('Freios', 'FreiosController@index')->name('site.Freios');
Route::get('Injecao', 'InjecaoController@index')->name('site.Injecao');
Route::get('Manutencao', 'ManutencaoController@index')->name('site.Manutencao');
Route::get('Suspensao', 'SuspensaoController@index')->name('site.Suspensao');

