@extends('layouts.admin')
@section('content')
	<div class="container well col-lg-12">
		{{Html::linkAction("AdmiController@verFormularioArticulo","AGREGAR ARTICULO",array("area"=>$area),array("class"=>"btn btn-primary col-sm-3"))}}
	</div>
@stop