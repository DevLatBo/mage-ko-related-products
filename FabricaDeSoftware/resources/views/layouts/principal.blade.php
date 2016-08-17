<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Fabrica de Software | Universidad Mayor de San Simon</title>
    <!--Original!-->
    {!! Html::style('assets/css/estilo.css') !!}
    {!! Html::style('assets/css/bootstrap.min.css') !!}
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  </head>
  <body>
    <div class="container well">
      <div class="jumbotron">
            <h2>UMSS | Fabrica de Software</h2>
      </div>
      <div>
        <div class="row">
          <div class="col-xs-12">
            @include('navegacion.barraUsuario')
            <br>
              @yield('content') 
          </div>
        </div>
      </div>
      <footer class="row panel">
        <table class="table table-responsive">
          <tr>
            <td class="col-lg-2"><a href="#"><img src="img/fcyt_logo_lite.png" class="img-responsive" width="70%"></a></td>
            <td class="col-lg-2"><a href="#"><img src="img/informatica_lite.png " class="img-responsive" width="70%"></i></a></td>
            <td class="col-lg-2"><a href="#"><img src="img/logoUMSS_lite.png" class="img-responsive" width="50%"></a></td>
            <td class="col-lg-2"><a href="#"><img src="img/memi_lite.png" class="img-responsive" width="90%"></a></td>
            <td class="col-lg-2"><a href="#"><img src="img/scesi_logo_lite.png" class="img-responsive" width="90%"></a></td>
          </tr>
        </table>
        <br>
        <br>
        <div class="row">
          <div class="col-lg-12" align="center">
            <p class="footer-block ">Copyright © 2016 - Fábrica de Software - Todos los derechos reservados. Ultima Modificación: 22/07/2016</p>
          </div>
        </div>
      </footer>
    </div>

    <script type="text/javascript" src="{{ URL::asset('assets/js/jquery-2.0.0.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.js') }}"></script>
    <script>
        $('.carousel').carousel({
            interval: 5000,
            pause:"hover"
        });
        

    </script>
  </body>
</html>