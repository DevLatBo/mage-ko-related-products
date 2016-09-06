@extends('layouts.admin')

@section('content')
	<div class="container well col-lg-12">
		<table class="table">
			<thead>
				<tr>
					<th><strong>AREAS</strong></th>
				</tr>
			</thead>
			<tbody>
				@foreach($areas as $area)
					<tr>
						<td>{{Html::linkAction('AdmiController@mostrarArticulos',$area->nombre,array('id'=>$area->id),array())}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop