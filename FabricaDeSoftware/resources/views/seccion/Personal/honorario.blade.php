@extends('seccion.Personal.personal')

@section('contenido')
	<div class="container well col-lg-12">
		<table class="table table-striped" id="cssTable">
			<thead>
				<th colspan=4>HONORARIO</th>
			</thead>
			<tbody>
				@foreach($honorarios as $hon)
					<tr>
						<td class="col-lg-8">
							<strong>Nombre: </strong>{{$hon->NOMBRE}}<br>
							<strong>Contacto: </strong>{{$hon->CORREO}}<br>
							
						</td>
						<td class="col-lg-4"><strong>AREA DE INVESTIGACION:</strong><br>{{$hon->AREA_DE_INVESTIGACION}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop