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
						<td class="col-lg-3" align="center"><img src="fotoUsuario/{{$sop->foto}}" width=60%></td>
						<td class="col-lg-6">
							<strong>Nombre: </strong>{{$sop->nombre}}<br>
							<strong>Contacto: </strong>{{$sop->correo}}<br>
							{{$sop->departamento}}<br>
							<strong>Departamento: </strong>{{$sop->departamento}}
						</td>
						<td class="col-lg-3"><strong>CARGO:</strong><br>{{$sop->cargo}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop