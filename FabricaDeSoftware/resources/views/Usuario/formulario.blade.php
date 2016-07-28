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
	<br>