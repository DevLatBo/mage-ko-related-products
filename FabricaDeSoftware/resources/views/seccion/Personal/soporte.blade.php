@extends('seccion.Personal.personal')

@section('contenido')
	<div class="container well col-lg-12">
		<table class="table table-bordered" id="cssTable">
			<thead>
				<th colspan=4>SOPORTE</th>
			</thead>
			<tbody>
				@foreach($soportes as $sop)
					<tr>
						<td class="col-lg-8">
							<strong>Nombre: </strong>{{$sop->NOMBRE}}<br>
							<strong>Contacto: </strong>{{$sop->CORREO}}<br>
						</td>
						<td class="col-lg-4"><strong>AREA DE INVESTIGACION:</strong><br>{{$sop->AREA_DE_INVESTIGACION}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop