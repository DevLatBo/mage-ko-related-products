@extends('seccion.Personal.personal')

@section('contenido')
	<div class="container well col-lg-12">
		<table class="table table-striped" id="cssTable">
			<thead>
				<th class="col-lg-3">Nombre</th>
				<th class="col-lg-3">Correo</th>
				<th class="col-lg-3">Departamento</th>
				<th class="col-lg-3">Foto</th>
			</thead>
			<tbody>
				@foreach($honorarios as $hon)
					<tr>
						<td>{{$hon->nombre}}</td>
						<td>{{$hon->correo}}</td>
						<td>{{$hon->departamento}}</td>
						<td><img src="fotoUsuario/{{$hon->foto}}" width=50%></td>				
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop