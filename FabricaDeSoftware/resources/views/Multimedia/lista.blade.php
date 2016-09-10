@extends('layouts.admin')
@section('content')
	<div class="container well col-lg-12">
		{{Html::linkAction("AdmiController@verFormularioMultimedia","Agregar Foto",array("form"=>"foto"),array("class"=>"btn btn-primary"))}}
		{{Html::linkAction("AdmiController@verFormularioMultimedia","Agregar Video",array("form"=>"video"),array("class"=>"btn btn-primary"))}}
	</div>
@stop