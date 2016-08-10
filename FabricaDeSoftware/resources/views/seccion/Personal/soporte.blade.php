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
				@foreach($soportes as $sop)
					<tr>
						<td>{{$sop->nombre}}</td>
						<td>{{$sop->correo}}</td>
						<td>{{$sop->departamento}}</td>
						<td><img src="fotoUsuario/{{$sop->foto}}" width=50%></td>				
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop