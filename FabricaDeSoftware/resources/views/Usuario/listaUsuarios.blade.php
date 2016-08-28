@extends('layouts.admin')

@section('content')
    <div class="secciones col-lg-12">
        {{Html::linkAction('AdmiController@listar','CIENTIFICO',array("personal"=>'cientifico'),array('class'=>'btn btn-lg btn-primary col-lg-8 col-lg-offset-2'))}}

        {{Html::linkAction('AdmiController@listar','HONORARIO',array("personal"=>'honorario'),array('class'=>'btn btn-lg btn-primary col-lg-8 col-lg-offset-2'))}}

        {{Html::linkAction('AdmiController@listar','ADMINISTRACION',array("personal"=>'administrativo'),array('class'=>'btn btn-lg btn-primary col-lg-8 col-lg-offset-2'))}}

        {{Html::linkAction('AdmiController@listar','SOPORTE',array("personal"=>'soporte'),array('class'=>'btn btn-lg btn-primary col-lg-8 col-lg-offset-2'))}}
    </div>
@stop