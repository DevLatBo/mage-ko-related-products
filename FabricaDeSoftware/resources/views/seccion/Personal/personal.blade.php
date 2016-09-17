@extends('layouts.principal')
@section('content')

<div class="row">
    <div class="col s12">
        <div class="col m3">
            <div class="collection">
            @foreach($tipos as $tipo)
            {{ Html::linkAction('FrontControl@verPersonal',$tipo->nombre_tipo,array('seccion'=>'personal','personal'=>$tipo->nombre_tipo),array('class' => "collection-item")) }}
            @endforeach
            </div>
        </div>
        <div class="col m9">
            @yield('contenido')
        </div>
    </div>
</div>

@stop