<<<<<<< HEAD
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
         <li>{{HTML::linkAction('FrontControl@abrirSeccion','Inicio',array('seccion'=>'Inicio'),array())}}</li>
         <li>{{HTML::linkAction('FrontControl@abrirSeccion','Investigaciones',array('seccion'=>'Investigaciones'),array())}}</li>
         <li>{{HTML::linkAction('FrontControl@abrirSeccion','Participantes',array('seccion'=>'Participantes'),array())}}</li>
         <li>{{HTML::linkAction('FrontControl@abrirSeccion','Multimedia',array('seccion'=>'Multimedia'),array())}}</li>
         <li>{{HTML::linkAction('FrontControl@abrirSeccion','Blog',array('seccion'=>'Blog'))}}</li>
         <li>{{HTML::linkAction('FrontControl@abrirSeccion','Instalaciones',array('seccion'=>'Instalaciones'),array())}}</li>
         <li>{{HTML::linkAction('FrontControl@abrirSeccion','Contactos',array('seccion'=>'Contacto'),array())}}</li>
=======
<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper green">
      <a href="#!" class="brand-logo">Fabrica de Software</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li>{{HTML::linkAction('FrontControl@abrirSeccion','Inicio',array('seccion'=>'inicio'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Investigaciones',array('seccion'=>'investigaciones'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Participantes',array('seccion'=>'participantes'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Multimedia',array('seccion'=>'multimedia'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Blog',array('seccion'=>'blog'))}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Instalaciones',array('seccion'=>'instalaciones'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Contactos',array('seccion'=>'contacto'),array())}}</li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li>{{HTML::linkAction('FrontControl@abrirSeccion','Inicio',array('seccion'=>'inicio'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Investigaciones',array('seccion'=>'investigaciones'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Participantes',array('seccion'=>'participantes'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Multimedia',array('seccion'=>'multimedia'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Blog',array('seccion'=>'blog'))}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Instalaciones',array('seccion'=>'instalaciones'),array())}}</li>
          <li>{{HTML::linkAction('FrontControl@abrirSeccion','Contactos',array('seccion'=>'contacto'),array())}}</li>
>>>>>>> 8efb61ed3850d92e94634bf8e94a7f8c572c9053
      </ul>
    </div>
  </nav>
</div>
