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
Route::get("listaInvestigacion/{investigacion}","AdmiController@mostrarAreas");
Route::get("listaInvestigacion/investigacion/{area}","AdmiController@mostrarArticulos");
Route::get("listaInvestigacion/investigacion/articulo/formulario{area}","AdmiController@verFormularioArticulo");
Route::get("tiposPersonal/{personal}","AdmiController@listar");
Route::get("galerias","AdmiController@verGalerias");
Route::get("galerias/{galeria}","AdmiController@verMultimedia");
Route::get('galerias/multimediaMultimedia');
Route::get('galerias/seccion/{form}',"AdmiController@verFormularioGaleria");

Route::get("/","FrontControl@index");
Route::get("/{seccion}","FrontControl@abrirSeccion");
Route::get("/Participantes/{personal}","FrontControl@verPersonal");
Route::get("/Investigaciones/{area}","FrontControl@mostrarArticulos");

Route::resource("galeria","GaleriaController");
Route::resource("multimedia","MultimediaController");
Route::resource("usuario","UsuarioController");
Route::resource("investigacion","investigacionController");
Route::resource("articulo","ArticuloController");
Route::get('eliminarArticulo/{id}', ['as'=>'eliminarArticulo', 'uses'=>'ArticuloController@eliminar']);

Route::get('eliminar/{id}', ['as'=>'eliminar', 'uses'=>'UsuarioController@eliminar']);