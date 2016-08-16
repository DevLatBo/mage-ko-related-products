@extends('seccion.Personal.personal')

@section('contenido')
	<div class="container well col-lg-12">
		<table class="table table-striped" id="cssTable">
			<thead>
				<th colspan=2>CIENTIFICO</th>
				<th>AREAS DE INVESTIGACION</th>
			</thead>
			<tbody>
				@foreach($cientificos as $cientifico)
					<tr>
						<td class="col-lg-3" align="center"><img src="fotoUsuario/{{$cientifico->FOTO}}" width=60%></td>
						<td class="col-lg-4">
							{{$cientifico->NOMBRE}}<br>
							{{$cientifico->CORREO}}<br>
							{{$cientifico->CARRERA}}
						</td>
						<td class="col-lg-5">{{$cientifico->AREAS}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop