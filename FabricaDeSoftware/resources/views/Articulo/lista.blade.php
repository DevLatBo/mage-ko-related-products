@extends('layouts.admin')
@section('content')
	<div class="container col-lg-12">
		{{Html::linkAction("AdmiController@verFormularioArticulo",null,array(),array("class"=>"btn btn-primary col-sm-3"))}}
	</div>
@stop