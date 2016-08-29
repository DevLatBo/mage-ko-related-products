@extends('layouts.principal')

@section('content')
  <div class="tab-pane" id="investigacion" >
    <div class="col-lg-4" >
      <div class = "panel panel-primary">
        <div class = "panel-heading">
          <h3 class="panel-title">Investigación</h3>
        </div>
        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
          <?php $i=1;?>
          @foreach($investigaciones as $investigacion)
            <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-target="#collapsible-<?php echo $i?>" href="#collapseOne">
                      <span class="glyphicon">
                      </span>{{$investigacion->Investigacion}}
                    </a>
                  </h4>
            </div>
            <div id="collapsible-<?php echo $i ?>" class="collapse">
              <?php $a=$investigacion->Areas;
                $areas=explode(",",$a);
              ?>
              <table class="table">
                @foreach($areas as $area)
                <tr>
                    <td><span class="glyphicon glyphicon-menu-right" >
                    </span><a href="#"> {{$area}}</a>
                    </td>
                </tr>
                @endforeach
              </table>
            </div><!--fin collapseOne!-->
            <?php $i++ ?>
            @endforeach
          </div><!--panel defaul antes grupo!-->
        </div><!--fin panel-gruop!-->
      </div><!--fin panel primary-->
    </div><!--fin col-lg-4!-->
    <div class="col-lg-8" id="setting">
      <div class="panel panel-primary" >
        <div class="panel-heading">
          <h3 class="panel-title">Alerta Temprana de Incendios Forestales</h3>
        </div>
        <div class="panel-body" align="justify">
          <img src="img/banner-investigacion.png" class="img-rounded img-responsive">
          <p>El Sistema Cognitivo de Alerta Temprana de Incendios Forestales es el primer y principal proyecto realizado por la Fábrica de Software, que tiene como objetivo otorgar medios de alerta temprana de incendios forestales a la población y a las instancias encargadas de socorrer estos incidentes.</p>
          <p>Los resúmenes de los trabajos de nuestros miembros se agrupan por las siguientes categorías de investigación:</p>
          <ul class="list-unstyled">
            <li>Robótica</li>
            <li>Aprendizaje Automático</li>
            <li>Visión por Computador</li>
            <li>Backend</li>
            <li>Aplicaciones Móviles</li>
          </ul>
        </div>
      </div><!--fin panel-primary!-->
    </div><!--fin col-lg-8 primario!-->
  </div><!--fin tabpane!-->

@stop