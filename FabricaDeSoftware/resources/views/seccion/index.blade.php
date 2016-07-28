@extends('layouts.principal')

@section('content')
  <div class="tab-pane active" id="home" >
    <div class="col-lg-4" >
      <div class = "panel panel-primary">
        <div class = "panel-heading">
          <h3 class="panel-title">Acerca de</h3>
        </div>
        <div class = "panel-body"  align="justify">
          <p>La Fábrica de Software es un laboratorio de investigación que apoya y fomenta la educación y la investigación interdisciplinaria sobre el desarrollo de software como ciencia e ingeniería.</p>
          <p>Es desde noviembre de 2015, que la Fábrica de Software empieza su trabajo con el apoyo de la Sociedad Científica de Estudiantes de Sistemas e Informática (SCESI), la carrera de Ingeniería en Informática y el centro de Mejoramiento de la Enseñanza Matemáticas Informática (MEMI). La investigación es dirigida por Di Santi Eduardo PhD. y se desarrolla por más de 30 estudiantes y docentes de de los departamentos de Informática, Sistemas, Electrónica, Física, Matemáticas y Electromecánica.</p>
          <p>La Fábrica de Software está situada en el edificio MEMI en el campus principal de la Universidad Mayor de San Simón.</p>
        </div>
      </div><!--fin panel primary-->
    </div><!--fin col-lg-4!-->
    <div class="col-lg-8">
      <div class="panel panel-primary" >
        <div class="panel-heading">
          <h3 class="panel-title">Fábrica de Software</h3>
        </div>
        <div class="panel-body" align="justify">
          <img src="img/banner-presentacion.png" class="img-rounded img-responsive">
            <p>Miembros de la Fábrica de Software durante la presentación del prototipo del Sistema Cognitivo de Detección de Incendios Forestales, presentado en la Universidad Mayor de San Simón.</p>
        </div>
      </div><!--fin panel-primary!-->
      <div class="panel panel-primary" >
        <div class="panel-heading">
          <h3 class="panel-title">Noticias y Eventos</h3>
        </div>
        <div class="panel-body" align="justify">
          <p>Esta sección esta en construcción, disculpe las molestias.</p>
        </div>
      </div><!--fin panel-primary!-->
    </div><!--fin col-lg-8 primario!-->
  </div><!--fin tabpane!-->
@stop