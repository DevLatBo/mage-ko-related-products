<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav nav-pills nav-justified">
         <li><a href="{!!URL::to('/')!!}" role="tab" data-toggle="tab">Inicio</a></li>
         <li><a href="{!!URL::to('investigaciones')!!}" role="tab" data-toggle="tab">Investigación</a></li>
         <li><a href="{!!URL::to('personal')!!}" role="tab" data-toggle="tab">Participantes</a></li>
         <li><a href="{!!URL::to('multimedia')!!}" role="tab" data-toggle="tab">Multimedia</a></li>
         <li><a href="{!!URL::to('blog')!!}" role="tab" data-toggle="tab">Blog</a></li>
         <li><a href="{!!URL::to('instalacion')!!}" role="tab" data-toggle="tab">Instalaciones</a></li>
         <li><a href="{!!URL::to('contacto')!!}" role="tab" data-toggle="tab">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>