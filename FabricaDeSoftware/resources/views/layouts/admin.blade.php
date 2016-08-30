<!DOCTYPE html>
<html lang="en">
    <head>
          <title>Administrador | Fabrica de Software</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            {!! Html::style('assets/css/estilo.css') !!}
            {!! Html::style('assets/css/bootstrap.min.css') !!}
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    </head>
    <body>

    <div class="container">
        <div class="banner">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dropdown">
                        <h4 class="pull-left">Admin | Fabrica de Software</h4>
                        <a class="btn btn-primary pull-right dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#">
                            <span class="glyphicon glyphicon glyphicon-user"></span>
                            <span class="caret"></span>
                        </a>
                        <br>
                        <br>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Principal</a></li>
                            <li><a href="#">Cerrar Sesion</a></li>
                        </ul>
                    </div><!--fin dropdown!-->
                </div><!--fin col-lg-12!-->
            </div><!--fin row!-->
        </div><!--fin banner!-->
    <!--fin cabecera!-->
    <!--menu admin!-->
        <div class="row">
            <div class="col-lg-3" >
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    Personal
                                    <span class="caret"></span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <table class="table">
                                <tr>
                                    <td>
                                        {{ HTML::linkAction('AdmiController@mostrarTiposUsuario', 'Personal') }}
                                        <!--a href="">Personal</a-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        {{ HTML::linkAction('AdmiController@verFormulario','Agregar Personal')}}
                                        <!--a href="">Agregar personal</a-->
                                    </td>
                                </tr>
                            </table>
                        </div><!--fin collapseOne!--> 
                    </div><!--panel defaul !--> 
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    Investigacion
                                    <span class="caret"></span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <table class="table">
                                <tr><td>{{HTML::linkAction('AdmiController@listarInvestigaciones','Investigaciones')}}</td></tr> 
                                <tr><td>{{HTML::linkAction('AdmiController@verFormularioInvestigacion','Agregar Investigacion')}}</td></tr>
                            </table>
                        </div>
                    </div><!--fin panel-default2!-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    Galeria
                                    <span class="caret"></span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <table class="table">
                                <tr><td>{{HTML::linkAction('AdmiController@verGalerias','Galerias')}}</td></tr>
                            </table>
                        </div>
                    </div><!--fin panel-default3!-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                    Videos
                                    <span class="caret"></span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <table class="table">
                                <tr><td><a href="">Lista de Video</a></td></tr>
                                <tr><td><a href="">Agregar Videos</a></td></tr>
                            </table>
                        </div>
                    </div><!--fin panel-default3!-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                    Fotos
                                    <span class="caret"></span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse">
                            <table class="table">
                                <tr><td><a href="">Fotos</a></td></tr>
                                <tr><td><a href="">Agregar Fotos</a></td></tr>
                            </table>
                        </div>
                    </div><!--fin panel-default!-->
                </div><!--fin panel-gruop!-->
            </div><!--fin col-lg-4!-->
            <div class="col-lg-9">
                <!--aqui debe entrar el contenido!-->
                @yield('content')
            </div><!--fin col-lg-8 primario!-->
       </div><!--fin row!-->
    <!--fin menu admin!-->
    </div><!--fin conteiner!-->
    {!! Html::script('assets/js/jquery-2.0.0.js')!!}
    {!! Html::script('assets/js/bootstrap.js')!!}
</body>
</html>
