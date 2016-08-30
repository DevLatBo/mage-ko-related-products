@extends('layouts.admin')
@section('content')
	<div class="control-group">
		{{Form::label('nombre','Nombre: ')}}
		<div class="controls">
			{{Form::text('nombre_galeria',null,["class"=>"form-control","placeholder"=>"Nombre de la galeria..."])}}
		</div>
	</div>
	<div class="control-group">
		{{Form::submit('CREAR GALERIA',null,['class'=>'btn btn-primary'])}}
	</div>
@stop