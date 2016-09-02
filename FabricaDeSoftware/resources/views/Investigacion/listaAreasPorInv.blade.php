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
						<td>{{$area->nombre}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop