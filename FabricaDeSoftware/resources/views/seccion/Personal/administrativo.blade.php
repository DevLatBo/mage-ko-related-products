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
				@foreach($administrativos as $adm)
					<tr>
						<td>{{$adm->nombre}}</td>
						<td>{{$adm->correo}}</td>
						<td>{{$adm->departamento}}</td>
						<td><img src="fotoUsuario/{{$adm->foto}}" width=50%></td>				
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop