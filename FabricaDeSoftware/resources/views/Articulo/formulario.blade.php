@extends('layouts.admin')

@section('content')
	<div class="container col-lg-12">
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
		    	{!! Form::textarea('descripcion',null,["class"=>"form-control","placeholder"=>"Descripcion...","rows"=>5]) !!}
		    </div>
		</div>
		<div class="control-group">
          	<div class="controls">
             		{!! Form::submit("Registrar",['class'=>'form-control btn btn-primary']) !!}
          	</div>
        </div>
	</div>
@stop