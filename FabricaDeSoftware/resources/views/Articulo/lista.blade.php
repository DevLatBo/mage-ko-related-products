@extends('layouts.admin')
@section('content')
	<div class="container well col-lg-12">
		{{Html::linkAction("AdmiController@verFormularioArticulo","AGREGAR ARTICULO",array("id"=>$id),array("class"=>"btn btn-primary col-sm-3"))}}
		<div class="lista">
			<table class="table table-stripped">
				<thead>
					<tr>
						<th class="col-xs-3">Articulo</th>
					</tr>
				</thead>
				<tbody>
					@foreach($articulos as $articulo)
					<tr>
						<td>{{$articulo->titulo}}</td>
						<td>{!! link_to_route('articulo.edit', $title='', $parameters = $articulo->id, $attributes = ['class'=>'glyphicon glyphicon-pencil']) !!}</td>
						<td>{!! link_to_route('eliminarArticulo', $title='', $parameters = $articulo->id, $attributes = ['class'=>'glyphicon glyphicon-remove']) !!}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@stop