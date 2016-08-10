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

Route::get("/","FrontControl@index");
Route::get("investigaciones","FrontControl@investigacion");
Route::get("personal","FrontControl@personal");
Route::get("multimedia","FrontControl@multimedia");
Route::get("blog","FrontControl@blog");
Route::get("instalacion","FrontControl@instalacion");
Route::get("contacto","FrontControl@contactos");

Route::get("personalCientifico","FrontControl@verCientificos");
Route::get("personalAdministrativo","FrontControl@verAdministrativos");
Route::get("personalHonorario","FrontControl@verHonorarios");
Route::get("personalSoporte","FrontControl@verSoportes");

Route::resource('admin','AdmiController');

Route::resource("usuario","UsuarioController");
Route::get("formulario","UsuarioController@verFormulario");
Route::get('eliminar/{id}', ['as'=>'eliminar', 'uses'=>'UsuarioController@eliminar']);
Route::resource("investigacion","investigacionController");
Route::get("formularioInvestigacion","investigacionController@verFormulario");