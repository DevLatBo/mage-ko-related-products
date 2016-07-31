@extends('layouts.admin')

@section('content')
    <div class="container well col-lg-12" >
		<div class="row">
			@include('Alerta.alertaFormulario')
			<div class="col-lg-8 col-lg-offset-2 form-horizontal">
				<h3>Registro de Usuario</h3>
				{!! Form::model($usuario,['route'=>['usuario.update',$usuario->id],'method'=>'PUT']) !!}
				@include('Usuario.formulario')
				<div class="control-group">
					<div class="controls">
						{!! Form::submit("Actualizar",['class'=>'form-control btn btn-primary']) !!}
					</div>
				</div>
				{!! Form::close()!!}	
			</div>	
		</div>
	</div>
@stop
