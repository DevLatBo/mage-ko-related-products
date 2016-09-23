@extends('layouts.admin')

@section('content')
	<div class="container well col-lg-12">
        @if(Session::has('mensaje'))
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{Session::get('mensaje')}}
            </div>
        @endif
		<h2>INVESTIGACIONES</h2>
		<table class="table table-striped" id="cssTable">
			<thead>
				<tr>
					<th class="col-lg-3">Investigacion</th>
					<th class="col-lg-7">Descripcion</th>
					<th class="col-lg-2">Editar</th>
				</tr>
			</thead>
			<tbody>
				@foreach($investigaciones as $inv)
					<tr>
						<td>{!!Html::linkAction('AdmiController@mostrarAreas',$inv->nombre,array('id'=>$inv->id),array())!!}</a></td>
						<td>{!!$inv->descripcion!!}</td>
						<td>{!! link_to_route('investigacion.edit', $title='', $parameters = $inv->id, $attributes = ['class'=>'glyphicon glyphicon-pencil']) !!}</td>
					</tr>
				@endforeach
					<tr>
						<td colspan=2>{{Html::linkAction('AdmiController@verFormularioInvestigacion','Agregar Investigacion',array(),array('class'=>'btn btn-primary'))}}</td>
					</tr>
			</tbody>
		</table>
	</div>
@stop