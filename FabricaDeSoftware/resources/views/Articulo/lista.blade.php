@extends('layouts.admin')
@section('content')
	<div class="container well col-lg-12">
		{{Html::linkAction("AdmiController@verFormularioArticulo","AGREGAR ARTICULO",array("area"=>$area),array("class"=>"btn btn-primary col-sm-3"))}}
		<div class="lista">
			<table class="table table-stripped">
				<thead>
					<tr>
						<th>Articulo</th>
						<th colspan=2>Descripcion</th>
					</tr>
				</thead>
				<tbody>
					@foreach($articulos as $articulo)
					<tr>
						<td>{{$articulo->titulo}}</td>
						<td>{{$articulo->descripcion}}</td>
						<td>{!! link_to_route('articulo.edit', $title='', $parameters = $articulo->id, $attributes = ['class'=>'glyphicon glyphicon-pencil']) !!}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@stop