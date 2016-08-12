@extends('seccion.Personal.personal')

@section('contenido')
	<div class="container well col-lg-12">
		<table class="table table-striped" id="cssTable">
			<thead>
				<th colspan=4>CIENTIFICO</th>
			</thead>
			<tbody>
				@foreach($cientificos as $cientifico)
					<tr>
						<td class="col-lg-3" align="center"><img src="fotoUsuario/{{$cientifico->foto}}" width=60%></td>
						<td class="col-lg-6">
							<strong>Nombre: </strong>{{$cientifico->NOMBRE}}<br>
							<strong>Contacto: </strong>{{$cientifico->CORREO}}<br>
							<strong>Departamento: </strong>{{$cientifico->DEPARTAMENTO}}
						</td>
						<td class="col-lg-3"><strong>AREA DE INVESTIGACION:</strong><br>{{$cientifico->AREA_DE_INVESTIGACION}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop