@extends('layouts.admin')

@section('content')

<div class="collection">
	@foreach($areas as $area)
		{{Html::linkAction('AdmiController@mostrarArticulos',$area->nombre,array('id'=>$area->id),array())}}
	@endforeach
</div>
            
@stop
<!-- 
	<div class="container well col-lg-12">
		<table class="table">
			<thead>
				<tr>
					<th><strong>AREAS</strong></th>
				</tr>
			</thead>
			<tbody>
					<tr>
					</tr>
			</tbody>
		</table>
	</div> -->