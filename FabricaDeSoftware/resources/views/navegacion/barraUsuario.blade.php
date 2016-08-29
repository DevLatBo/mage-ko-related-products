<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav nav-pills nav-justified">
         <li>{{HTML::linkAction('FrontControl@abrirSeccion','Inicio',array('seccion'=>'inicio'),array())}}</li>
         <li>{{HTML::linkAction('FrontControl@abrirSeccion','Investigaciones',array('seccion'=>'investigaciones'),array())}}</li>
         <li>{{HTML::linkAction('FrontControl@abrirSeccion','Participantes',array('seccion'=>'participantes'),array())}}</li>
         <li>{{HTML::linkAction('FrontControl@abrirSeccion','Multimedia',array('seccion'=>'multimedia'),array())}}</li>
         <li>{{HTML::linkAction('FrontControl@abrirSeccion','Blog',array('seccion'=>'blog'))}}</li>
         <li>{{HTML::linkAction('FrontControl@abrirSeccion','Instalaciones',array('seccion'=>'instalaciones'),array())}}</li>
         <li>{{HTML::linkAction('FrontControl@abrirSeccion','Contactos',array('seccion'=>'contacto'),array())}}</li>
      </ul>
    </div>
  </div>
</nav>