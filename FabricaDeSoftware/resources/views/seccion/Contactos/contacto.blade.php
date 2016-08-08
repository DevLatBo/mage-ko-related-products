@extends("layouts.principal")

@section("content")
	<div class="tab-pane" id="contacto">
        <div class="col-lg-12">
            <div class="panel panel-primary">
               	<div class = "panel-heading">
                	<h3 class="panel-title">Contacto</h3>
               	</div>
                <table  class="table" id="map">
                    <tbody>
                        <tr>
                            <td width="30%" align="justify">
                               	<p class="small">
                               		<h5><strong>Correo Electronico:</strong></h5>
                               		sistemacognitivo@scesi.org
                               	</p>
                                <br>
                                <p class="small">
                                	<h5><strong>Direccion:</strong></h5>
                                	Av.Oquendo final Jordan s/n <br> Planta baja MEMI<br>Campus central Universidad Mayor de San Simon<br>Cochabamaba - Bolivia
                                </p>
                                <br>
                                <p class="small">
                                    <h5><strong>Telefono:</strong></h5>
                                    + 591
                                </p>
                            </td>
                            <td width="70%">
                                <div class="thumbnail">
                                	<div class="embed-responsive embed-responsive-16by9">
                                    	<iframe src="https://www.google.com/maps/d/embed?mid=1FGLbI2SAqlg5oJdSagiZZnUeRNA" width="640" height="480"></iframe>
                                    </div>
                                    <div class="caption">
                                    	<h3>Memi</h3>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div><!--fin panel-primary!-->
        </div><!--fin col-lg-12!-->
    </div><!--fin tab-pane!-->
@stop