<?php

namespace Fabrica\Http\Controllers;

use Illuminate\Http\Request;
use Fabrica\Http\Requests\crearUsuarioRequest;
use Fabrica\Http\Requests\editarUsuarioRequest;
use Fabrica\Http\Requests;
use Fabrica\Area;
use \Fabrica\tipo;
use \Fabrica\Usuario;
use \Fabrica\Trabajo;
use DB;
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
        $datos=Usuario::join('personal','usuario.id','=','personal.usuario_id')
            ->join('tipo','personal.tipo_id','=','tipo.id')
            ->select('usuario.id','usuario.nombre','usuario.correo','usuario.carrera','usuario.cargo','usuario.foto',
                'tipo.nombre_tipo')
            ->get();
        $vista=view('Usuario.listaUsuarios',['datos'=>$datos]);
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
        $foto=$request['path'];
        $nombre=$foto->getClientOriginalName();
        \Storage::disk('local')->put($nombre, \File::get($foto));
        echo $request["carrera"];
        $usuario=Usuario::create([
                'nombre'=>$request['nombre'],
                'correo'=>$request['correo'],
                'carrera'=>$request['carrera'],
                'cargo'=>$request['cargo'],
                'foto'=>$nombre,
            ]);
        $id_usuario=Usuario::find($usuario->id);
        $tipos=$request["tipo"];
        foreach($tipos as $t){
            $tipoSelec=tipo::find($t);
            $id_usuario->tipos()->attach($tipoSelec);
        }
        $area=$request["area"];
        foreach($area as $a){
            $areaSelec=Area::find($a);
            $id_usuario->areas()->attach($areaSelec);
        }
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
        $tipos=tipo::get();
        $areas=Area::get();
        $areas_seleccionadas=DB::table('trabajo')
            ->where('trabajo.usuario_id','=',$id)
            ->lists('area_id');
        $tipos_seleccionados=DB::table('personal')
            ->where('personal.usuario_id','=',$id)
            ->lists('tipo_id');
        $modo='edicion';
        $vista=view('Usuario.edicion',['usuario'=>$usuario,
                                        'tipos'=>$tipos,
                                        'areas'=>$areas,
                                        'areas_seleccionadas'=>$areas_seleccionadas,
                                        'tipos_seleccionados'=>$tipos_seleccionados,
                                        'modo'=>$modo]);
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
        $areas=Area::all();
        $modo="registrar";
        $vista=view('Usuario.crear',['tipos'=>$tipos,
                                        'areas'=>$areas,
                                        'modo'=>$modo]);
        return $vista;
    }
}
