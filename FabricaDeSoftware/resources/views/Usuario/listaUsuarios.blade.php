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
                        <th class="col-lg-4">Nombre</th>
                        <th class="col-lg-1">Correo</th>
                        <th class="col-lg-1">Carrera</th>
                        <th class="col-lg-1">Cargo</th>
                        <th class="col-lg-1">Personal</th>
                        <th class="col-lg-2">Foto</th>
                        <th class="col-lg-1">Editar</th>
                        <th class="col-lg-1">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($datos as $dato)
                    <tr>
                        <td>{{$dato->nombre}}</td>
                        <td>{{$dato->correo}}</td>
                        <td>{{$dato->carrera}}</td>
                        <td>{{$dato->cargo}}</td>
                        <td>{{$dato->nombre_tipo}}</td>
                        <td><img src="fotoUsuario/{{$dato->foto}}" width=100%></td>
                        <td align="center">{!! link_to_route('usuario.edit', $title='', $parameters = $dato->id, $attributes = ['class'=>'glyphicon glyphicon-pencil']) !!}</td>
                        <td align="center">{!! link_to_route('eliminar', $title='', $parameters = $dato->id, $attributes = ['class'=>'glyphicon glyphicon-remove']) !!}</td>
                    </tr>
                @endforeach
                    <tr>
                        <td colspan=6>{{Html::linkAction('UsuarioController@verFormulario','Registrar Personal',array(),array('class'=>'btn btn-primary'))}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
@stop