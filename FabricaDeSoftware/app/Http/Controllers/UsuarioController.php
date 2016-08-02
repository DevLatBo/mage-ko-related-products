<?php

namespace Fabrica\Http\Controllers;

use Illuminate\Http\Request;
use Fabrica\Http\Requests\crearUsuarioRequest;
use Fabrica\Http\Requests\editarUsuarioRequest;
use Fabrica\Http\Requests;

use \Fabrica\tipo;
use \Fabrica\Usuario;

use Redirect;
use Session;
use Input;

class UsuarioController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Usuario::All();
        $vista=view('Usuario.listaUsuarios',['usuarios'=>$user]);
        return $vista;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(crearUsuarioRequest $request)
    {
        Usuario::create([
                'nombre'=>$request['nombre'],
                'correo'=>$request['correo'],
                'departamento'=>$request['departamento'],
                'cargo'=>$request['cargo'],
                'tipo_id'=>$request['tipo'],
            ]);
        $vista=redirect('/usuario')->with('mensaje','Usuario Registrado');
        return $vista;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario=Usuario::find($id);
        $tipos=tipo::All();
        //$idTipo=tipo::where('id',$id)->get();
        $idTipo=$usuario->tipo_id;
        $modo='edicion';
        $vista=view('Usuario.edicion',['usuario'=>$usuario,
                                        'tipos'=>$tipos,
                                        'modo'=>$modo,
                                        'idTipo'=>$idTipo]);
        return $vista;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(editarUsuarioRequest $request, $id)
    {
        $usuario=Usuario::find($id);
        $usuario->fill($request->all());
        $usuario->save();
        Session::flash('mensaje','Usuario editado correctamente');
        $vista=Redirect::to('/usuario');
        return $vista;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function eliminar($id){
        $usuario=Usuario::find($id);
        $usuario->delete();
        $vista=redirect('/usuario');
        return $vista;
    }
    public function verFormulario(){
        $tipos=tipo::All();
        $modo="registrar";
        $vista=view('Usuario.crear',['tipos'=>$tipos,
                                        'modo'=>$modo]);
        return $vista;
    }
}
