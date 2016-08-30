@extends('layouts.admin')
@section('content')
	@include('Alerta.alertaFormulario')
	
	<div class="container well col-lg-12">
		<div class="row">
			<div class="form-horizontal">
				{{Form::open(['route'=>'video.store','method'=>'POST'])}}
				<div class="control-group">
				{{Form::label('nombre','Nombre: ')}}
					<div class="controls">
						{{Form::text('nombre_video',null,["class"=>"form-control","placeholder"=>"Nombre del Video...","id"=>'nombre'])}}
					</div>
				</div>
				{{Form::label('url','URL: ')}}
				<div class="controls">
					{{Form::text('url',null,['class'=>"form-control","placeholder"=>'URL...',"id"=>'url'])}}
				</div>
				<br>
				{{From::label('galeria',)}}
				<div class="controls">
					
				</div>
				<div class="control-group">
					<div class="controls">
						{{Form::submit('CREAR GALERIA',['class'=>'btn btn-primary col-lg-4 col-lg-offset-4'])}}
					</div>
				</div>
			</div>
		</div>
	</div>
@stop