@extends('layouts.admin')
@section('content')
	@if(Session::has('mensaje'))
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{Session::get('mensaje')}}
        </div>
    @endif
    <table class="table table-stripped">
    	<th>Galerias</th>
    	@foreach($galerias as $galeria)
    		<tr>
    			<td>{{Html::linkAction('AdmiController@verMultimedia',$galeria->nombre_galeria,array('galeria'=>$galeria->nombre_galeria),array())}}</td>
    		</tr>
    	@endforeach
    </table>
	{{Html::linkAction('AdmiController@verFormularioGaleria','Nueva Galeria',array('form'=>'formulario'),array('class'=>'btn btn-primary'))}}
@stop