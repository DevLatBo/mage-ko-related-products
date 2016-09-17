<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper green">
      <a href="#!" class="brand-logo">Fabrica de Software</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li>{{HTML::linkAction('FrontControl@abrirSeccion','Inicio',array('seccion'=>'Inicio'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Investigaciones',array('seccion'=>'Investigaciones'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Participantes',array('seccion'=>'Participantes'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Multimedia',array('seccion'=>'Multimedia'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Blog',array('seccion'=>'Blog'))}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Instalaciones',array('seccion'=>'Instalaciones'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Contactos',array('seccion'=>'Contacto'),array())}}</li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li>{{HTML::linkAction('FrontControl@abrirSeccion','Inicio',array('seccion'=>'Inicio'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Investigaciones',array('seccion'=>'Investigaciones'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Participantes',array('seccion'=>'Participantes'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Multimedia',array('seccion'=>'Multimedia'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Blog',array('seccion'=>'Blog'))}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Instalaciones',array('seccion'=>'Instalaciones'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Contactos',array('seccion'=>'Contacto'),array())}}</li>
      </ul>
    </div>
  </nav>
</div>
