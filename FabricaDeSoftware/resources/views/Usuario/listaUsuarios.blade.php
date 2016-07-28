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
        <div class="container well">
            @if(Session::has('mensaje'))
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{Session::get('mensaje')}}
                </div>
            @endif
            <h2>Lista de Personal</h2>
            <table  class="table table-striped" id="cssTable">
                <thead>
                    <tr>
                        <th class="col-lg-3">Nombre</th>
                        <th class="col-lg-3">Correo</th>
                        <th class="col-lg-2">Departamento</th>
                        <th class="col-lg-2">Cargo</th>
                        <th class="col-lg-1">Editar</th>
                        <th class="col-lg-1">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{$usuario->nombre}}</td>
                        <td>{{$usuario->correo}}</td>
                        <td>{{$usuario->departamento}}</td>
                        <td>{{$usuario->cargo}}</td>
                        <td align="center">{!! link_to_route('usuario.edit', $title='', $parameters = $usuario->id, $attributes = ['class'=>'glyphicon glyphicon-pencil']) !!}</td>
                        <td align="center">{!! link_to_route('eliminar', $title='', $parameters = $usuario->id, $attributes = ['class'=>'glyphicon glyphicon-remove']) !!}</td>
                    </tr>
                @endforeach
                    <tr>
                       <td colspan=7><a class="btn btn-primary" href="#">Insertar Personal</a></td>
                    </tr>
                </tbody>
            </table>
     </div><!--fin container!-->
    <script src="bootstrap/js/jquery-2.0.0.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
