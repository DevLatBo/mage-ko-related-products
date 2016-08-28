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

Route::resource("usuario","UsuarioController");

Route::resource("investigacion","investigacionController");
Route::get("formularioInvestigacion","investigacionController@verFormulario");

Route::get("/","FrontControl@index");
Route::get("/{seccion}","FrontControl@abrirSeccion");
Route::get("/{seccion}/{personal}","FrontControl@verPersonal");
Route::get("personal/{personal}","AdmiController@listar");
Route::get('eliminar/{id}', ['as'=>'eliminar', 'uses'=>'UsuarioController@eliminar']);
