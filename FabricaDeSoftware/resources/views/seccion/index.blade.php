@extends('layouts.principal')

@section('content')

{!! Html::style('assets/css/parallax.css') !!}

<div id="overlay" style="color:#fddaec;">
    <div id="title"><h1>Fabrica de software</h1></div>
    <video class="visible-desktop" id="hero-vid" poster="http://www.markhillard.com/sandbox/media/polina.jpg" autoplay loop muted>
        <source type="video/webm" src="http://www.markhillard.com/sandbox/media/polina.webm"></source>
        <source type="video/mp4" src="http://www.markhillard.com/sandbox/media/polina.mp4"></source>
    </video>
    <div id="state" class="visible-desktop"><span class="iconicfill-pause"></span></div>
    <img id="hero-pic" class="hidden-desktop" src="http://www.markhillard.com/sandbox/media/polina.jpg" alt="">
</div>

<div id="content" style="color:#fddaec;">
  <p>La Fábrica de Software es un laboratorio de investigación que apoya y fomenta la educación y la investigación interdisciplinaria sobre el desarrollo de software como ciencia e ingeniería.</p>
  
  <p>Es desde noviembre de 2015, que la Fábrica de Software empieza su trabajo con el apoyo de la Sociedad Científica de Estudiantes de Sistemas e Informática (SCESI), la carrera de Ingeniería en Informática y el centro de Mejoramiento de la Enseñanza Matemáticas Informática (MEMI). La investigación es dirigida por Di Santi Eduardo PhD. y se desarrolla por más de 30 estudiantes y docentes de de los departamentos de Informática, Sistemas, Electrónica, Física, Matemáticas y Electromecánica.</p>
</div>

<!--
  <div class="tab-pane active" id="home" >
    <div class="col-lg-6" >
      <div class = "panel panel-primary">
        <div class = "panel-heading">
          <h3 class="panel-title">Acerca de</h3>
        </div>
        <div class = "panel-body"  align="justify">
          <p>La Fábrica de Software es un laboratorio de investigación que apoya y fomenta la educación y la investigación interdisciplinaria sobre el desarrollo de software como ciencia e ingeniería.</p>
          <p>Es desde noviembre de 2015, que la Fábrica de Software empieza su trabajo con el apoyo de la Sociedad Científica de Estudiantes de Sistemas e Informática (SCESI), la carrera de Ingeniería en Informática y el centro de Mejoramiento de la Enseñanza Matemáticas Informática (MEMI). La investigación es dirigida por Di Santi Eduardo PhD. y se desarrolla por más de 30 estudiantes y docentes de de los departamentos de Informática, Sistemas, Electrónica, Física, Matemáticas y Electromecánica.</p>
        </div>
      </div>
    </div><
    <div class="col-lg-6">
       <div class="panel panel-primary" >
        <div class="panel-heading">
          <h3 class="panel-title">Fábrica de Software</h3>
        </div>
        <div class="panel-body" align="justify">
          <img src="img/banner-presentacion.png" class="img-rounded img-responsive">
            <p>Miembros de la Fábrica de Software durante la presentación del prototipo del Sistema Cognitivo de Detección de Incendios Forestales, presentado en la Universidad Mayor de San Simón.</p>
        </div>
      </div> 
      <div class="panel panel-primary" >
        <div class="panel-heading">
          <h3 class="panel-title">Noticias y Eventos</h3>
        </div>
        <div class="panel-body" align="justify">
          <p>Esta sección esta en construcción, disculpe las molestias.</p>
        </div>
      </div>
    </div>
  </div> -->
<script>
  $(document).ready(function () {
    $(window).on('load scroll', function () {
        var scrolled = $(this).scrollTop();
        $('#title').css({
            'transform': 'translate3d(0, ' + -(scrolled * 0.2) + 'px, 0)', // parallax (20% scroll rate)
            'opacity': 1 - scrolled / 400 // fade out at 400px from top
        });
        $('#hero-vid').css('transform', 'translate3d(0, ' + -(scrolled * 0.25) + 'px, 0)'); // parallax (25% scroll rate)
    });
    
    // video controls
    $('#state').on('click', function () {
        var video = $('#hero-vid').get(0);
        var icons = $('#state > span');
        $('#overlay').toggleClass('fade');
        if (video.paused) {
            video.play();
            icons.removeClass('iconicfill-play').addClass('iconicfill-pause');
        } else {
            video.pause();
            icons.removeClass('iconicfill-pause').addClass('iconicfill-play');
        }
    });
});
</script>
@stop