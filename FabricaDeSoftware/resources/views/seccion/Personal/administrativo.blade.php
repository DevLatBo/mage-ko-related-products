@extends('seccion.Personal.personal')

@section('contenido')
	<div class="container well col-lg-12">
		<table class="table table-striped" id="cssTable">
			<thead>
				<th colspan=4>ADMINISTRATIVO</th>
			</thead>
			<tbody>
				@foreach($administrativos as $adm)
					<tr>
						<td class="col-lg-3" align="center"><img src="fotoUsuario/{{$adm->foto}}" width=60%></td>
						<td class="col-lg-6">
							<strong>Nombre: </strong>{{$adm->nombre}}<br>
							<strong>Contacto: </strong>{{$adm->correo}}<br>
							{{$adm->departamento}}<br>
							<strong>Departamento: </strong>{{$adm->departamento}}
						</td>
						<td class="col-lg-3"><strong>CARGO:</strong><br>{{$adm->cargo}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop