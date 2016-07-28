<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Fabrica de Software</title>
        <!--Original!-->
        <link rel="stylesheet" href="bootstrap/css/estilo.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
    <div class="container well" >
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 form-horizontal">
				<h3>Registro de Usuario</h3>
				{!! Form::open(['route'=>'usuario.store','method'=>'POST']) !!}
				@include('Usuario.formulario')
				<div class="control-group">
					<div class="controls">
						{!! Form::submit("Registrar",['class'=>'form-control btn btn-primary']) !!}
					</div>
				</div>
				{!! Form::close()!!}	
			</div>	
		</div>
	</div>
	<script src="bootstrap/js/jquery-2.0.0.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
