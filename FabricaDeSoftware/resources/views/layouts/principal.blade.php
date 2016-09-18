<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Fabrica de Software | Universidad Mayor de San Simon</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {!! Html::style('assets/css/bootstrap.min.css') !!}
    {!! Html::style('assets/css/materialize.min.css') !!}    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="{{ URL::asset('assets/js/jquery-2.0.0.js') }}"></script>
  </head>
  <body>
    @include('navegacion.barraUsuario')
    @yield('content') 

    <footer class="page-footer green">
          <div class="container">
            <div class="row">
              <div class="col s12">
                  <div class="col m2"> 
                   <img height="100px" src="/img/fcyt_logo_lite.png">
                  </div>
                  <div class="col m2"> 
                    <img  height="100px" src="/img/informatica_lite.png">
                  </div>
                  <div class="col m2"> 
                    <img  height="100px" src="/img/logoUMSS_lite.png">
                  </div>
                  <div class="col m2"> 
                    <img  height="100px" src="/img/memi_lite.png">
                  </div>
                  <div class="col m2"> 
                    <img  height="100px" src="/img/scesi_logo_lite.png">
                  </div>
                </div>
              </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            Copyright © 2016 - Fábrica de Software - Todos los derechos reservados. Ultima Modificación: 22/07/2016
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
    {{HTML::script("assets/js/bootstrap.js")}}
    {{HTML::script("assets/js/jquery.js")}}
    <script src="{{ URL::asset('assets/js/materialize.min.js') }}"></script>
    <script>
      $(".button-collapse").sideNav();
      $(document).ready(function(){
        $('.carousel').carousel();
      });
    </script>
    <script>
      $(document).ready(function(){
        $('.modal-trigger').leanModal();
      });
      var a = function(){
        $('#modal1').openModal();
      };
      $('#modal1').closeModal();
    </script>
  </body>
</html>