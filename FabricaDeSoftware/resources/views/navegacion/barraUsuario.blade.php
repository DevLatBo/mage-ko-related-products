<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper blue darken-4">
      <a href="#!" class="brand-logo">Fabrica de Software</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li>{{HTML::linkAction('FrontControl@abrirSeccion','Inicio',array('seccion'=>'inicio'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Investigaciones',array('seccion'=>'investigaciones'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Participantes',array('seccion'=>'participantes'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Contactos',array('seccion'=>'contacto'),array())}}</li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li>{{HTML::linkAction('FrontControl@abrirSeccion','Inicio',array('seccion'=>'inicio'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Investigaciones',array('seccion'=>'investigaciones'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Participantes',array('seccion'=>'participantes'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Contactos',array('seccion'=>'contacto'),array())}}</li>
      </ul>
    </div>
  </nav>
</div>
<!--           <li>{{HTML::linkAction('FrontControl@abrirSeccion','Blog',array('seccion'=>'blog'))}}</li> -->
<!-- <li>{{HTML::linkAction('FrontControl@abrirSeccion','Multimedia',array('seccion'=>'multimedia'),array())}}</li> -->
<!-- <li>{{HTML::linkAction('FrontControl@abrirSeccion','Instalaciones',array('seccion'=>'instalaciones'),array())}}</li> -->