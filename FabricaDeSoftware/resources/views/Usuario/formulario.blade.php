<div class="control-group">
	{!! Form::label("Nombre: ") !!}
		<div class="controls">
			{!! Form::text('nombre',null,["class"=>"form-control",'placeholder'=>"Ingrese Nombre..."]) !!}	
		</div>
</div>
<div class="control-group">
	{!! Form::label("Correo: ") !!}
	<div class="controls">
			{!! Form::text('correo',null,["class"=>"form-control",'placeholder'=>"Ingrese Correo..."]) !!}
	</div>
</div>
<div class="control-group">
		{!! Form::label("Departamento: ") !!}
	<div class="controls">
		{!! Form::select('departamento', ['Seleccionar'=>'Seleccionar',
											'Sistemas'=>'Ingenieria de Sistemas',
											'Informatica'=>'Ingenieria de Informatica',
											'Electronica'=>'Ingenieria Electronica'], null, ["class"=>"form-control"]) !!}
	</div>
</div>
	<div class="control-group">
		{!! Form::label("Cargo: ") !!}
		<div class="controls">
			{!! Form::select('cargo',['Seleccionar'=>'Seleccionar',
										'Administracion'=>'Administrador',
										'Desarrollo'=>'Desarrollador',
										'Investigacion'=>'Investigador'],
										null,["class"=>"form-control"]) !!}
		</div>
	</div>
	<div class="control-group">
		{!! Form::label("Personal: ") !!}
		<div class="controls">
			@foreach($tipos as $tipo)
				@if ($modo=="registrar")
					{{ Form::radio('tipo',$tipo->id,false) }}{{$tipo->nombre_tipo }}<br>
				@else
					{{ Form::radio('tipo',$tipo->id,($tipo->id == $idTipo)?1:0) }}{{$tipo->nombre_tipo}}<br>
				@endif
			@endforeach
		</div>
	</div>
	<div class="control-group">
		{!! Form::label('Foto: ') !!}
		<div class="controls">
			{{ Form::file('path') }}
		</div>
	</div>
	<br>