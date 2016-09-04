@extends('layouts.admin')

@section('content')
	<div class="container well col-lg-12">
		@include('Alerta.alertaFormulario')
		{!! Form::open(['route'=>'articulo.store','method'=>'POST']) !!}
		@include("Articulo.formulario")
		<div class="control-group">
			{!! Form::hidden("area_id",$area,array()) !!}
		</div>
		<div class="control-group">
          	<div class="controls">
             		{!! Form::submit("Registrar Articulo",['class'=>'btn btn-primary']) !!}
          	</div>
        </div>
	</div>
@stop