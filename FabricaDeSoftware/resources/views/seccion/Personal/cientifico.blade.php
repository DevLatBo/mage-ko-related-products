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
				@foreach($cientificos as $cientifico)
					<tr>
						<td>{{$cientifico->nombre}}</td>
						<td>{{$cientifico->correo}}</td>
						<td>{{$cientifico->departamento}}</td>
						<td><img src="fotoUsuario/{{$cientifico->foto}}" width=50%></td>				
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop