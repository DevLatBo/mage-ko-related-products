@extends('layouts.principal')

@section('content')
    <div class="tab-pane" id="personal" >
        <div class="col-lg-4" >
            <div class = "panel panel-primary">
                <div class = "panel-heading">
                    <h3 class="panel-title">Personal</h3>
                </div>
                <div class="panel-group">
                    @foreach($tipos as $tipo)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <span class="glyphicon glyphicon-menu-right" >
                                </span><a href="#"> {{$tipo->nombre_tipo}}</a>
                            </h4>
                        </div>
                    </div>
                    @endforeach
                </div><!--fin de panel-grupo!-->
            </div>
        </div>
        <div class="col-lg-8">
            <div class="panel panel-primary" >
                <div class="panel-heading">
                    <h3 class="panel-title">Participantes</h3>
                </div>
                <div class="panel-body" align="justify">
                    <img src="img/banner-personas.png" class="img-rounded img-responsive">
                    <p>La investigación y desarrollo realizado en la Fábrica de Software cuenta con la participación de más de 30 estudiantes y docentes de de los departamentos de Informática, Sistemas, Electrónica, Física, Matemáticas y Electromecánica. </p>
                    <p>Además del apoyo logístico otorgado por el personal administrativo que da soporte al proyecto dentro del campus principal de la Universidad Mayor de San Simón.</p>
                </div>
            </div>
        </div>
    </div><!--fin tab-pane!-->
@stop