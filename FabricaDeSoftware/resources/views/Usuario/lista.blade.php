@extends('layouts.admin')

@section('content')

<div class="collection">
    <a href="#!" class="collection-item">Alvin</a>
    <a href="#!" class="collection-item active">Alvin</a>
    <a href="#!" class="collection-item">Alvin</a>
    <a href="#!" class="collection-item">Alvin</a>
</div>

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
                    <th class="col-lg-2">Correo</th>
                    <th class="col-lg-2">Carrera</th>
                    <th class="col-lg-1">Cargo</th>
                    <th class="col-lg-2">Foto</th>
                    <th class="col-lg-1">Editar</th>
                    <th class="col-lg-1">Eliminar</th>
                </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->Nombre}}</td>
                    <td>{{$usuario->Correo}}</td>
                    <td>{{$usuario->Carrera}}</td>
                    <td>{{$usuario->Cargo}}</td>
                    <td><img src="/Fotos/{{$usuario->foto}}" width="70%"></td>
                    <td align="center">{!! link_to_route('usuario.edit', $title='', $parameters = $usuario->id, $attributes = ['class'=>'glyphicon glyphicon-pencil']) !!}</td>
                    <td align="center">{!! link_to_route('eliminar', $title='', $parameters = $usuario->id, $attributes = ['class'=>'glyphicon glyphicon-remove']) !!}</td>
                </tr>
            @endforeach
                <tr>
                    <td colspan=6>{{Html::linkAction('AdmiController@verFormulario','Registrar Personal',array(),array('class'=>'btn btn-primary'))}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@stop