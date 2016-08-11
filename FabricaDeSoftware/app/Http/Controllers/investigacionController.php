<?php

namespace Fabrica\Http\Controllers;

use Illuminate\Http\Request;
use Fabrica\Investigacion;
use Fabrica\Http\Requests\crearInvestigacionRequest;
use Fabrica\Http\Requests;
use Fabrica\Area;
class investigacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investigaciones=Investigacion::All();
        $vista=view('Investigacion.lista',['investigaciones'=>$investigaciones]);
        return $vista;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(crearInvestigacionRequest $request)
    {
        Investigacion::create([
            'nombre'=>$request["nombre"],
            'descripcion'=>$request["descripcion"],
            ]);
        $vista=redirect("/investigacion")->with('mensaje','Investigacion Registrada');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    public function verFormulario(){
        $areas=Area::select('id','nombre')->get();
        $vista=view('Investigacion.nuevainvestigacion',["areas"=>$areas]);
        return $vista;
    }
}
