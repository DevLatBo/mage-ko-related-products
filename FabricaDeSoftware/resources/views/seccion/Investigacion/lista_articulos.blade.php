@extends('seccion.Investigacion.investigaciones')
@section('investigacion_contenido')
	<div class="col-lg-8" id="setting">
      	<div class="panel panel-primary" >
        	<div class="panel-heading">
          		<h3 class="panel-title">Alerta Temprana de Incendios Forestales</h3>
        	</div>
        	<div class="panel-body" align="justify">
          		<table class="table table-hover">
          			<thead>
          				<tr>
          					<td>Articulo</td>
          					<td>Acerda de</td>
          				</tr>
          			</thead>
          			<tbody>
          				@foreach($articulos as $articulo)
          				<tr>
          					<td>{{$articulo->titulo}}</td>
          					<td>{{$articulo->desccripcion}}</td>
          				</tr>
          				@endforeach
          			</tbody>
          		</table>
        	</div>
      	</div><!--fin panel-primary!-->
    </div><!--fin col-lg-8 primario!-->
@stop