@extends('seccion.Personal.personal')

@section('contenido')
	<div class="container well col-lg-12">
		<table class="table table-striped" id="cssTable">
			<thead>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Departamento</th>
				<th>Foto</th>
			</thead>
			<tbody>
				@foreach($cientificos as $cientifico)
					<tr>
						<td>{{$cientifico->nombre}}</td>
						<td>{{$cientifico->correo}}</td>
						<td>{{$cientifico->departamento}}</td>
						<td>{{$cientifico->foto}}</td>				
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop