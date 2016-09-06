<?php

namespace Fabrica\Http\Controllers;

use Illuminate\Http\Request;

use Fabrica\Http\Requests;
use Fabrica\Http\Requests\crearArticuloRequest;
use Fabrica\Articulo;
use Fabrica\Area;
use Session;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(crearArticuloRequest $request)
    {
        Articulo::create(["titulo"=>$request["titulo"],
                            "descripcion"=>$request["descripcion"],
                            "area_id"=>$request["area_id"]]);
        
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
        $articulo=Articulo::find($id);
        $vista=view("Articulo.editar",["articulo"=>$articulo]);
        return $vista;
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
        $articulo=Articulo::find($id);
        $articulo->fill($request->all());
        $articulo->save();
        Session::flash('mensaje','Articulo editado correctamente');
        /*
        $vista=view("Articulo")
        return $vista;*/
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
}
