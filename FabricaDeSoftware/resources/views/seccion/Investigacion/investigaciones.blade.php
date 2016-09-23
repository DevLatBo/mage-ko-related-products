@extends('layouts.principal')

@section('content') 

<div class="row">
  <div class="col m3">
    <div class="collection">
    <?php $i=1;?>
    @foreach($investigaciones as $investigacion)
      {{$investigacion->Investigacion}}
        <?php $a=$investigacion->Areas;
          $areas=explode(",",$a);
        ?>
          @foreach($areas as $area)
          {{Html::linkAction('FrontControl@mostrarArticulos',$area,array('area'=>$area),array('class'=>'collection-item'))}}
          @endforeach
      <?php $i++ ?>
    @endforeach
    </div>
  </div>
  <div class="col m9">
    @yield('investigacion_contenido')
  </div>   
</div>


          
@stop