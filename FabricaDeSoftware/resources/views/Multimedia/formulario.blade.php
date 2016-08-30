@extends('layouts.admin')
@section('content')
	@include('Alerta.alertaFormulario')
	<div class="container well col-lg-12">
		<div class="row">
			<div class="form-horizontal">
				{{Form::open(['route'=>'galeria.store','method'=>'POST'])}}
				<div class="control-group">
				{{Form::label('nombre','Nombre: ')}}
					<div class="controls">
						{{Form::text('nombre_galeria',null,["class"=>"form-control","placeholder"=>"Nombre de la galeria...","id"=>'nombre'])}}
					</div>
				</div>
				<br>
				<div class="control-group">
					<div class="controls">
						{{Form::submit('CREAR GALERIA',['class'=>'btn btn-primary col-lg-4 col-lg-offset-4'])}}
					</div>
				</div>	
			</div>
		</div>
	</div>
@stop