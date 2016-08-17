@extends('seccion.Personal.personal')

@section('contenido')
	<div class="container well col-lg-12">
		<table class="table table-striped" id="cssTable">
			<thead class="cabeceraPersonal">
				<th colspan=2>PERSONAL DE ADMINISTRATIVO</th>
				<th>AREAS DE INVESTIGACION</th>
			</thead>
			<tbody>
				@foreach($administrativos as $adm)
					<tr>
						<td class="col-lg-3" align="center"><img src="fotoUsuario/{{$adm->FOTO}}" width=60%></td>
						<td class="col-lg-4">
							{{$adm->NOMBRE}}<br>
							{{$adm->CORREO}}<br>
							{{$adm->CARRERA}}
						</td>
						<td class="col-lg-5">{{$adm->AREAS}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop