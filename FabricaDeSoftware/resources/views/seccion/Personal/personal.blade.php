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
                            </span>
                            {{ Html::linkAction('FrontControl@verPersonal',$tipo->nombre_tipo,array('seccion'=>'personal','personal'=>$tipo->nombre_tipo),array()) }}
                        </h4>
                    </div>
                </div>
                @endforeach
            </div><!--fin de panel-grupo!-->
        </div>
    </div>
    <div class="col-lg-8">
        @yield('contenido')
    </div>
</div><!--fin tab-pane!-->
@stop