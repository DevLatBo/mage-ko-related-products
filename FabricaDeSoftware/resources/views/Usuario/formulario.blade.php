<h3>{{($modo=="registrar")?"Registro":"Edicion"}} de Personal</h3>
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
			@if ($modo=="registrar")
				@foreach($tipos as $tipo)
					{{ Form::checkbox('tipo[]',$tipo->id,false) }}{{$tipo->nombre_tipo }}<br>
				@endforeach
			@else
				@foreach($tipos as $key => $value)
					<?php
						$checked=false;
						if(in_array($value->id, $tipos_seleccionados)) $checked=true;
					?>
					{{ Form::checkbox('tipo[]',$value->id,$checked) }} {{$value->nombre_tipo}}<br>
				@endforeach
			@endif
		</div>
	</div>
	<div class="control-group">
		{{ Form::label("Areas: ") }}
		<div class="controls">
			@if ($modo=="registrar")
				@foreach($areas as $area)
					{{ Form::checkbox('area[]',$area->id,false) }}{{$area->nombre}}<br>
				@endforeach
			@else
				@foreach($areas as $key => $value)
					<?php
						$checked=false;
						 if(in_array($value->id, $areas_seleccionadas)) $checked = true;
					?>
					{{ Form::checkbox('area[]',$value->id,$checked) }} {{$value->nombre}}<br>
				@endforeach
			@endif
		</div>
	</div>
	<div class="control-group">
		{!! Form::label('Foto: ') !!}
		<div class="controls">
			{{ Form::file('path',null,array('class'=>'form-control')) }}
		</div>
	</div>
	<br>