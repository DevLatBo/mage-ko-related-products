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
				@foreach($soportes as $sop)
					<tr>
						<td>{{$sop->nombre}}</td>
						<td>{{$sop->correo}}</td>
						<td>{{$sop->departamento}}</td>
						<td>{{$sop->foto}}</td>				
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop