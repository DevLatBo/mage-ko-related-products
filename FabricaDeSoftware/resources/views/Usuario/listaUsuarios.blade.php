@extends('layouts.admin')

@section('content')
    <div class="secciones col-lg-12">
        {{Html::linkAction('AdmiController@listar','CIENTIFICO',array("personal"=>'Cientifico'),array('class'=>'btn btn-lg btn-primary col-lg-8 col-lg-offset-2'))}}

        {{Html::linkAction('AdmiController@listar','HONORARIO',array("personal"=>'Honorario'),array('class'=>'btn btn-lg btn-primary col-lg-8 col-lg-offset-2'))}}

        {{Html::linkAction('AdmiController@listar','ADMINISTRACION',array("personal"=>'Administrativo'),array('class'=>'btn btn-lg btn-primary col-lg-8 col-lg-offset-2'))}}

        {{Html::linkAction('AdmiController@listar','SOPORTE',array("personal"=>'Soporte'),array('class'=>'btn btn-lg btn-primary col-lg-8 col-lg-offset-2'))}}
    </div>
@stop