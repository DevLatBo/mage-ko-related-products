@extends('layouts.admin')
@section('content')
	{{Html::linkAction('AdmiController@verFormularioGaleria','Nueva Galeria',array('form'=>'formulario'),array('class'=>'btn btn-primary'))}}
@stop