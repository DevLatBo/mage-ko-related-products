@extends('layouts.admin')

@section('content')
	<div class="container well col-lg-12">
		@include('Alerta.alertaFormulario')
		{{ Form::model($articulo,['route'=>['articulo.update',$articulo->id], 'method'=>'PUT']) }}
		@include("Articulo.formulario")
		<div class="control-group">
          	<div class="controls">
             		{!! Form::submit("Registrar Articulo",['class'=>'btn btn-primary']) !!}
          	</div>
        </div>
	</div>
@stop