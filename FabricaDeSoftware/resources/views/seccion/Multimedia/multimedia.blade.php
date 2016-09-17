@extends('layouts.principal')
@section('content')

<!-- <div class="modal-content carousel">
    <a class="carousel-item" href="#one!"><img src="http://lorempixel.com/250/250/nature/1"></a>
    <a class="carousel-item" href="#two!"><img src="http://lorempixel.com/250/250/nature/2"></a>
    <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/250/250/nature/3"></a>
    <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/250/250/nature/4"></a>
    <a class="carousel-item" href="#five!"><img src="http://lorempixel.com/250/250/nature/5"></a>
</div> -->

    <div class="tab-pane" id="multimedia" >
        <div class="col-lg-12"><!--inicio modificacion!-->
            <div class="panel panel-primary" >
                <div class="panel-heading">
                    <h3 class="panel-title">Galeria de Fotos</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="video-container embed-responsive embed-responsive-16by9">
                                <a  href="#">
                                    <img class="thumbnail img-responsive" id="image-1" src="img/fotos/robotica0.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="video-container embed-responsive embed-responsive-16by9">
                                <a  href="#">
                                    <img class="thumbnail img-responsive" id="image-2" src="img/fotos/machine0.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="video-container embed-responsive embed-responsive-16by9">
                                <a href="#">
                                    <img class="thumbnail img-responsive" id="image-3" src="img/fotos/vision0.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="video-container embed-responsive embed-responsive-16by9">
                                <a href="#">
                                    <img class="thumbnail img-responsive" id="image-4" src="img/fotos/movil0.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="video-container embed-responsive embed-responsive-16by9">
                                <a href="#">
                                    <img class="thumbnail img-responsive" id="image-5" src="img/fotos/bombero13.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="video-container embed-responsive embed-responsive-16by9">
                                <a href="#">
                                    <img class="thumbnail img-responsive" id="image-6" src="img/fotos/charla2.jpg">
                                </a>
                            </div>
                        </div>
                        <hr>
                    </div><!--fin panel-body!-->
                </div><!--fin panel-primary!-->
                <div class="hidden" id="img-repo">
                <!-- #image-1 -->
                    <div class="item" id="image-1">
                        <img class="thumbnail img-responsive"  title="Prueba del Dron" src="img/fotos/robotica0.jpg" alt="Pruebas del Dron en el patio de la San Simon">
                    </div>
                    <div class="item" id="image-1">
                        <img class="thumbnail img-responsive"  title="Partes del Dron" src="img/fotos/robotica1.jpg" alt="Mostrando las partes del Dron">
                    </div>

                    <div class="item" id="image-1">
                        <img class="thumbnail img-responsive"  title="Armado del Dron" src="img/fotos/robotica2.jpg" alt="Armado del dron y sus suplementos">
                    </div>

                    <div class="item" id="image-1">
                        <img class="thumbnail img-responsive"  title="Armando del Dron" src="img/fotos/robotica4.jpg" alt="Mostrando los suplementos del Dron">
                    </div>

                    <div class="item" id="image-1">
                        <img class="thumbnail img-responsive"  title="Programando el Dron" src="img/fotos/robotica3.jpg" alt="Realizando la programacion para el Dron">
                    </div>
                    <!-- #image-2 -->
                    <div class="item" id="image-2">
                        <img class="thumbnail img-responsive" title="Capacitacion Inteligencia Artificial" src="img/fotos/machine0.jpg" alt="En los ambientes del memi se realizo las capacitaciones">
                    </div>
                    <div class="item" id="image-2">
                        <img class="thumbnail img-responsive" title="Realizando prueba de fuego" src="img/fotos/machine1.jpg" alt="Prueba de reconocimiento de imagen">
                    </div>
                    <div class="item" id="image-2">
                        <img class="thumbnail img-responsive" title="Realizando prueba de fuego" src="img/fotos/machine2.jpg" alt="Prueba de reconocimiento de fuego">
                    </div>
                    <!-- #image-3-->
                    <div class="item" id="image-3">
                        <img class="thumbnail img-responsive" title="Grupo de Vision por Computadora" src="img/fotos/vision0.jpg" alt="Desarrollando la aplicacion">
                    </div>
                    <div class="item" id="image-3">
                        <img class="thumbnail img-responsive" title="Grupo de Vision por Computadora" src="img/fotos/vision1.jpg" alt="Desarrollando la aplicacion">
                    </div>
                    <!-- #image-4-->
                    <div class="item" id="image-4">
                        <img class="thumbnail img-responsive" title="Grupo de Aplicacion Movil" src="img/fotos/movil0.jpg" alt="Reunion del grupo para el desarrollo de la app">
                    </div>
                    <div class="item" id="image-4">
                        <img class="thumbnail img-responsive" title="Grupo de Aplicacion Movil" src="img/fotos/movil1.jpg" alt="Desarrollando la app">
                    </div>
                    <!-- #image-5-->
                    <div class="item" id="image-5">
                        <img class="thumbnail img-responsive" title="Visitando a los Bomberos" src="img/fotos/bombero13.jpg" alt="Reuniones con las autoridades del departamento de Bomberos">
                    </div>
                    <div class="item" id="image-5">
                        <img class="thumbnail img-responsive" title="Visitando a los Bomberos" src="img/fotos/bombero2.jpg" alt="Preparando para la prueba de vuelo en la visita al departamento de  Bomberos">
                    </div>
                    <div class="item" id="image-5">
                        <img class="thumbnail img-responsive" title="Visitando a los Bomberos" src="img/fotos/bombero0.jpg" alt="Exposion del Dron y la aplicacion web">
                    </div>
                    <div class="item" id="image-5">
                        <img class="thumbnail img-responsive" title="Prueba de Vuelo" src="img/fotos/bombero1.jpg" alt="Realizando prueba de vuelo del Dron">
                    </div>
                    <div class="item" id="image-5">
                        <img class="thumbnail img-responsive" title="Exposion de las aplicaciones" src="img/fotos/bombero16.jpg" alt="Exposion de la Aplicacion web y movil">
                    </div>
                    <!-- #image-6-->
                    <div class="item" id="image-6">
                        <img class="thumbnail img-responsive" title="Exposion 1" src="img/fotos/charla2.jpg" alt="Mostrando las herramientos de desarrollo para el proyecto">
                    </div>
                    <div class="item" id="image-6">
                        <img class="thumbnail img-responsive" title="Exposion 2" src="img/fotos/charla1.jpg" alt="Explicacion de la tematica de implementacion">
                    </div>
                    <div class="item" id="image-6">
                        <img class="thumbnail img-responsive" title="Exposion 3" src="img/fotos/charla0.jpg" alt="El grupo de trabajo">
                    </div>
                </div>
                <div class="modal" id="modal-gallery" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content" >
                            <div class="modal-header">
                                <button class="close" type="button" data-dismiss="modal">×</button>
                                <h3 class="modal-title"></h3>
                            </div>
                            <div class="modal-body">
                                <div id="modal-carousel" class="carousel">
                                    <div class="carousel-inner">
                                    </div>
                                    <a class="carousel-control left" href="#modal-carousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                    <a class="carousel-control right" href="#modal-carousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <h4 class="modal-descripcion"></h4>
                                <button class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            </div><!--fin modal-footer!-->
                        </div><!--fin modal-content!-->
                    </div><!--fin modal-dialog!-->
                </div><!--fin modal!-->
            </div><!--fin panel-prymari!-->
        </div><!--fin col-lg-12!-->
        <div class="col-lg-12">
            <div class="panel panel-primary" >
                <div class="panel-heading">
                    Galeria de Video
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="video-container embed-responsive embed-responsive-16by9">
                                <a  href="#">
                                    <img class="thumbnail img-responsive" id="video-1" src="img/videos/video1.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="video-container embed-responsive embed-responsive-16by9">
                                <a  href="#">
                                    <img class="thumbnail img-responsive" id="video-2" src="img/videos/video2.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                                <div class="video-container embed-responsive embed-responsive-16by9">
                                    <a href="#">
                                        <img class="thumbnail img-responsive" id="video-3" src="img/videos/video3.png">
                                    </a>
                                </div>
                        </div>
                        <hr>
                    </div><!--fin panel-body!-->
                </div>
                <div class="hidden" id="img-repo">
                <!-- #video-1 -->
                    <div class="item" id="video-1">
                        <div class="video-container embed-responsive embed-responsive-16by9">
                            <iframe class=" embed-responsive-item" id="video-1" src="https://www.youtube.com/embed/CY1S8gm8nQg"></iframe>
                        </div>
                    </div>
                <!-- #video-2 -->
                    <div class="item" id="video-2">
                        <div class="video-container embed-responsive embed-responsive-16by9">
                            <iframe class="thumbnail embed-responsive-item" id="video-2" title="Video 2" src="https://www.youtube.com/embed/hxLZeROlt9w"></iframe>
                        </div>
                    </div>
                    <!-- #video-3-->
                    <div class="item" id="video-3">
                        <div class="video-container embed-responsive embed-responsive-16by9">
                        <iframe class="thumbnail embed-responsive-item" id="video-3" src="https://www.youtube.com/embed/A7TwQBKd_MA"></iframe>
                        </div>
                    </div>
                </div>
                <div class="modal" id="modal-gallery" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content" >
                            <div class="modal-header">
                                <button class="close" type="button" data-dismiss="modal">×</button>
                                <h3 class="modal-title"></h3>
                            </div>
                            <div class="modal-body">
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            </div><!--fin modal-footer!-->
                        </div><!--fin modal-content!-->
                    </div><!--fin modal-dialog!-->
                </div><!--fin modal!-->
            </div><!--fin panel-primary!-->
        </div><!--fin col-lg-12!-->
                <!--fin modificacion!-->
    </div><!--fin tab-pane!-->
@stop