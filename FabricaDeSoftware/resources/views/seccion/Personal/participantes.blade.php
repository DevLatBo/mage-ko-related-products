@extends('seccion.Personal.personal')

@section('contenido')

<h3>{{$personal}}</h3>
<div class="row">
@foreach($participantes as $p)
    <div class="col s12 m6">
	<div class="card horizontal">
	    <div class="card-image activator waves-effect waves-block waves-light">
	      <img class="activator" src="http://lorempixel.com/100/190/nature/6">
	    </div>
	    <div class="card-content">
	      <span class="card-title grey-text text-darken-4">{{$p->NOMBRE}}<i class="activator horizontal material-icons right">more_vert</i></span>
	      <p>{{$p->CORREO}}</p>	
	      <p>{{$p->CARRERA}}</p>
	    </div>
	    <div class="card-reveal">
	      <span class="card-title grey-text text-darken-4">Areas<i class="material-icons right">close</i></span>
	      {!!$p->AREAS!!}	      
	    </div>
	  </div>
</div>
@endforeach
</div>

@stop