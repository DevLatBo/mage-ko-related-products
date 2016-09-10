@extends('layouts.admin')
@section('content')
	@include('Alerta.alertaFormulario')
	<div class="container well col-lg-12">
		<div class="row">
			<div class="form-horizontal">
				{{Form::open(['route'=>'multimedia.store','method'=>'POST','files'=>true])}}
				<div class="control-group">
				{{Form::label('nombre','Nombre: ')}}
					<div class="controls">
						{{Form::text('nombre_foto',null,["class"=>"form-control","placeholder"=>"Nombre...","id"=>'nombre'])}}
					</div>
				</div>
				<div class="control-group">
					{{Form::label('descripcion','Descripcion: ')}}
					<div class="controls">
						{{ Form::textarea('descripcion',null,["class"=>"form-control","placeholder"=>"Descripcion...","rows"=>5]) }}
					</div>
				</div>
				<br>
				@if($multimedia=="foto")
					<div class="control-group">
						{!! Form::label('Foto: ') !!}
						<div class="controls">
							{{ Form::file('foto',null,array('class'=>'form-control')) }}
						</div>
					</div>
				@else
					<div class="control-group">
						{{Form::label('url','URL: ')}}
						<div class="controls">
							{{Form::text('url',null,['class'=>"form-control","placeholder"=>'URL...',"id"=>'url'])}}
						</div>
					</div>
				@endif
				{{Form::label('galeria',"Galeria: ")}}
				<div class="controls">
					@foreach($galerias as $galeria)
						{{Form::radio('galeria[]',$galeria->id,false) }}{{$galeria->nombre_galeria}}<br>
					@endforeach
				</div>
				<br>
				<div class="control-group">
					<div class="controls">
						{{Form::submit('AGREGAR FOTO',['class'=>'btn btn-primary col-lg-4 col-lg-offset-4'])}}
					</div>
				</div>
			</div>
		</div>
	</div>
@stop