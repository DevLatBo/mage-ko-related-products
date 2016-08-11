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
						<td class="col-lg-3" align="center"><img src="fotoUsuario/{{$hon->foto}}" width=60%></td>
						<td class="col-lg-6">
							<strong>Nombre: </strong>{{$hon->nombre}}<br>
							<strong>Contacto: </strong>{{$hon->correo}}<br>
							{{$hon->departamento}}<br>
							<strong>Departamento: </strong>{{$hon->departamento}}
						</td>
						<td class="col-lg-3"><strong>CARGO:</strong><br>{{$hon->cargo}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop