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
         <li>{{HTML::linkAction('FrontControl@index','Inicio')}}</li>
         <li>{{HTML::linkAction('FrontControl@investigacion','Investigacion')}}</li>
         <li>{{HTML::linkAction('FrontControl@personal','Participantes')}}</li>
         <li>{{HTML::linkAction('FrontControl@multimedia','Multimedia')}}</li>
         <li>{{HTML::linkAction('FrontControl@blog','Blog')}}</li>
         <li>{{HTML::linkAction('FrontControl@instalacion','Instalaciones')}}</li>
         <li>{{HTML::linkAction('FrontControl@contactos','Contactos')}}</li>
      </ul>
    </div>
  </div>
</nav>