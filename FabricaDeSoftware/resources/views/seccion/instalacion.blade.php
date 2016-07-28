@extends('layouts.principal')

@section('content')
    <div class="tab-pane" id="instalacion">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class = "panel-heading">
                    <h3 class="panel-title">Instalaciones</h3>
                </div>
                <table class="table">
                    <tbody>
                        <tr>
                            <td width="50%" align="justify">
                                <p>La Fábrica de Software y el personal científico que se encuentra desarrollando el Sistema Cognitivo de Alerta Temprana de Incendios Forestales está alojado actualmente en el centro de Mejoramiento de la Enseñanza Matemáticas Informática (MEMI)</p>
                                <p>Para acceder a la información del centro MEMI y sus instalaciones, por favor visite <a href="#">su sitio</a>.</p>
                            </td>
                            <td width="50%">
                                <div style = "text-align:center;">
                                    <img src="img/memi.jpg" class="img-responsive" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="635" height="300"></iframe>
                                </div>
                            </td>
                        </tr>
                   </tbody>
                </table>
            </div><!--fin panel-primary!-->
        </div><!--fin col-lg-12!-->
    </div><!--fin tab-pane!-->
@stop