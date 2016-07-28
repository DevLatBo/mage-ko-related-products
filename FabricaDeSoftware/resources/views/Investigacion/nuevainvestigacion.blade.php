<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Fabrica de Software</title>
        <!--Original!-->
        {!! Html::style('bootstrap/css/estilo.css') !!}
        {!! Html::style('bootstrap/css/bootstrap.min.css') !!}
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
    <div class="container well" >
    	<div class="row">
            @include('Alerta.alertaFormulario')
    		<div class="col-lg-8 col-lg-offset-2 form-horizontal">
                <h3>Detalle de Investigacion</h3>
                {!! Form::open(['route'=>'investigacion.store','method'=>'POST']) !!}
                <div class="control-group">
                    {{ Form::label("Nombre: ") }}
                    <div class="controls">
                    	{!! Form::text('nombre',null,["class"=>"form-control","placeholder"=>"Investigacion..."]) !!}
                    </div>
                </div>
                <div class="control-group">
                    {{ Form::label("Descripcion") }}
                    <div class="controls">
                    	{!! Form::textarea('descripcion',null,["class"=>"form-control","placeholder"=>"Descripcion...","rows"=>5]) !!}
                    	<!--textarea type="text" class="form-control" row="7" placeholder="Detalle" name="detalle"></textarea-->	
                    </div>
                </div>
                <div class="control-group">
                    {{ Form::label("Enlace del Video: ") }}
                    <div class="controls">
                    	{!! Form::text("url",null,["class"=>"form-control","placeholder"=>"http://"]) !!}
                    </div>
                </div>
                <br>
                <div class="control-group">
                   <div class="controls">
                   		{!! Form::submit("Registrar",['class'=>'form-control btn btn-primary']) !!}
                   </div>
              </div>
            </div>
    	</div>
	   <br>
    </div>
</body>
</html>