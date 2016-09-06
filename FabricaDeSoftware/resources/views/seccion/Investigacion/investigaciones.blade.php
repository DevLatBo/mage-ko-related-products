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
    @yield('investigacion_contenido')
  </div><!--fin tabpane!-->

@stop