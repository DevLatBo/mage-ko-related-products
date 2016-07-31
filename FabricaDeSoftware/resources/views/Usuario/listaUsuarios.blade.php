@extends('layouts.admin')

@section('content')
        <div class="container well col-lg-12">
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
                        <td colspan=6>{{Html::linkAction('FrontControl@formulario','Registrar Personal',array(),array('class'=>'btn btn-primary'))}}</td>
                        <!--td colspan=6><a class="btn btn-primary" href="#">Insertar Personal</a></td-->
                    </tr>
                </tbody>
            </table>
        </div>
@stop