@extends('layouts.admin')

@section('content')
    <div class="container well col-lg-12">
    	<div class="row">
            @include('Alerta.alertaFormulario')
    		<div class="col-lg-8 col-lg-offset-2 form-horizontal">
                <h3>Detalle de Investigacion</h3>
                {!! Form::open(['route'=>'investigacion.store','method'=>'POST']) !!}
				@include('Investigacion.formulario')
                <div class="control-group">
                   <div class="controls">
                   		{!! Form::submit("Registrar",['class'=>'form-control btn btn-primary']) !!}
                   </div>
              </div>
            </div>
    	</div>
    </div>
@stop