@extends('layouts.principal')

@section('content')
    <div class="tab-pane" id="personal" >
        <div class="col-lg-4" >
            <div class = "panel panel-primary">
                <div class = "panel-heading">
                    <h3 class="panel-title">Personal</h3>
                </div>
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <span class="glyphicon glyphicon-menu-right" >
                                </span><a href="#"> Administrativo</a>
                            </h4>
                        </div>
                    </div><!--fin panel-default!-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <span class="glyphicon glyphicon-menu-right" >
                                </span><a href="#"> Científico</a>
                            </h4>
                        </div>
                    </div><!--fin panel-default!-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <span class="glyphicon glyphicon-menu-right" >
                                </span><a href="#"> Honorario</a>
                            </h4>
                        </div>
                    </div><!--fin panel-default!-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <span class="glyphicon glyphicon-menu-right" >
                                </span><a href="#"> Soporte</a>
                            </h4>
                        </div>
                    </div><!--fin panel-default!-->
                </div><!--fin de panel-grupo!-->
            </div>
        </div>
        <div class="col-lg-8">
            <div class="panel panel-primary" >
                <div class="panel-heading">
                    <h3 class="panel-title">Participantes</h3>
                </div>
                <div class="panel-body" align="justify">
                    <img src="img/banner-personas.png" class="img-rounded img-responsive">
                    <p>La investigación y desarrollo realizado en la Fábrica de Software cuenta con la participación de más de 30 estudiantes y docentes de de los departamentos de Informática, Sistemas, Electrónica, Física, Matemáticas y Electromecánica. </p>
                    <p>Además del apoyo logístico otorgado por el personal administrativo que da soporte al proyecto dentro del campus principal de la Universidad Mayor de San Simón.</p>
                </div>
                <!--<table class="table table-responsive table-striped thumbnail" style="padding: 0; margin: 0;">
                    <thead >
                        <tr>
                                <th class="col-lg-1"></th>
                                <th class="col-lg-5"></th> 
                                <th class="col-lg-2">Area de Trabajo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                                <td><img src="img/persona1.png" class="img-responsive"/></td>
                                <td>Mario Pedraza<br>
                                    mario@gmail.com<br>
                                    Ingeniero Sistemas<br>
                                </td> 
                                <td>Robotica</td>
                         </tr>
                         <tr>
                                <td><img src="img/persona1.png" class="img-responsive"/></td>
                                <td>Juan Vasquez<br>
                                    juan@gmail.com<br>
                                    Ingeniero Sistemas<br>
                                </td> 
                                <td>Robotica</td>
                         </tr>
                     </tbody>
                </table>-->
            </div><!--fin panel-primary!-->
        </div><!--fin col-lg-8!-->
    </div><!--fin tab-pane!-->
@stop