<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('admin','AdmiController');
Route::get("tiposPersonal","AdmiController@mostrarTiposUsuario");
Route::get("formularioUsuario","AdmiController@verFormulario");
Route::get("formularioInvestigacion","AdmiController@verFormularioInvestigacion");
Route::get("listaInvestigacion","AdmiController@listarInvestigaciones");
Route::get("tiposPersonal/{personal}","AdmiController@listar");
Route::get("galerias","AdmiController@verGalerias");
Route::get('galerias/{form}',"AdmiController@verFormularioGaleria");

Route::resource("usuario","UsuarioController");
Route::resource("investigacion","investigacionController");

Route::get("/","FrontControl@index");
Route::get("/{seccion}","FrontControl@abrirSeccion");
Route::get("/{seccion}/{personal}","FrontControl@verPersonal");
Route::get('eliminar/{id}', ['as'=>'eliminar', 'uses'=>'UsuarioController@eliminar']);