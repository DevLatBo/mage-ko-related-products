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
				@foreach($administrativos as $adm)
					<tr>
						<td>{{$adm->nombre}}</td>
						<td>{{$adm->correo}}</td>
						<td>{{$adm->departamento}}</td>
						<td>{{$adm->foto}}</td>				
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop