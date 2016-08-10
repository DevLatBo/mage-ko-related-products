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
				@foreach($honorarios as $hon)
					<tr>
						<td>{{$hon->nombre}}</td>
						<td>{{$hon->correo}}</td>
						<td>{{$hon->departamento}}</td>
						<td>{{$hon->foto}}</td>				
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop