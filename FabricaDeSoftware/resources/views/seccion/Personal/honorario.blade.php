@extends('seccion.Personal.personal')

@section('contenido')
	<div class="container well col-lg-12">
		<table class="table table-striped" id="cssTable">
			<thead class="cabeceraPersonal">
				<th colspan=2>PERSONAL HONORARIO</th>
				<th>AREAS DE INVESTIGACION</th>
			</thead>
			<tbody>
				@foreach($honorarios as $hon)
					<tr>
						<td class="col-lg-6" colspan=2>
							{{$hon->NOMBRE}}<br>
							{{$hon->CORREO}}<br>
						</td>
						<td class="col-lg-6">{{$hon->AREAS}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop