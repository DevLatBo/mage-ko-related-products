@extends('layouts.admin')

@section('content')
	<div class="container well col-lg-12">
		@include('Alerta.alertaFormulario')
		{!! Form::open(['route'=>'articulo.store','method'=>'POST']) !!}
		<div class="control-group">
		    {{ Form::label("Nombre: ") }}
		    <div class="controls">
		    	{!! Form::text('titulo',null,["class"=>"form-control","placeholder"=>"Titulo..."]) !!}
		    </div>
		</div>
		<div class="control-group">
		    {{ Form::label("Descripcion: ") }}
		    <div class="controls">
		    	{!! Form::textarea('descripcion',null,["class"=>"form-control","placeholder"=>"Descripcion...","rows"=>4]) !!}
		    </div>
		</div>
		<div class="control-group">
			{!! Form::hidden("area",$area,array()) !!}
		</div>
		<br>
		<div class="control-group">
          	<div class="controls">
             		{!! Form::submit("Registrar Articulo",['class'=>'btn btn-primary']) !!}
          	</div>
        </div>
	</div>
@stop