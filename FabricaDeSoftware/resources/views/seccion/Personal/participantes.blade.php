@extends('seccion.Personal.personal')

@section('contenido')
	<div class="panel-heading">
        <h3 class="panel-title">{{$personal}}</h3>
    </div>
    <div class="panel-body" align="justify">
		<table class="table table-striped" id="cssTable">
			<thead class="cabeceraPersonal">
				<th colspan=2>NOMBRE PERSONAL</th>
				<th>AREAS DE INVESTIGACION</th>
			</thead>
			<tbody>
				@foreach($participantes as $p)
					<tr>
						<td class="col-lg-3" align="center"><img src="/Fotos/{{$p->FOTO}}" width=60%></td>
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