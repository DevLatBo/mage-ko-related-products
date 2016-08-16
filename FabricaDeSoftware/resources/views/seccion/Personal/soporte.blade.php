@extends('seccion.Personal.personal')

@section('contenido')
	<div class="container well col-lg-12">
		<table class="table table-bordered" id="cssTable">
			<thead>
				<th colspan=2>SOPORTE</th>
				<th>AREAS DE INVESTIGACION</th>
			</thead>
			<tbody>
				@foreach($soportes as $sop)
					<tr>
						<td class="col-lg-6" colspan="2">
							{{$sop->NOMBRE}}<br>
							{{$sop->CORREO}}<br>
						</td>
						<td class="col-lg-6">{{$sop->AREAS}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop