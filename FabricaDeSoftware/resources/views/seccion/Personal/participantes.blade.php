@extends('seccion.Personal.personal')

@section('contenido')
	<div class="container well col-lg-12">
		<table class="table table-striped" id="cssTable">
			<thead class="cabeceraPersonal">
				<th colspan=2>PERSONAL DE ...</th>
				<th>AREAS DE INVESTIGACION</th>
			</thead>
			<tbody>
				@foreach($participantes as $p)
					<tr>
						<td class="col-lg-3" align="center"><img src="/fotoUsuario/{{$p->FOTO}}" width=60%></td>
						<td class="col-lg-4">
							{{$p->NOMBRE}}<br>
							{{$p->CORREO}}<br>
							{{$p->CARRERA}}
						</td>
						<td class="col-lg-5">{{$p->AREAS}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop