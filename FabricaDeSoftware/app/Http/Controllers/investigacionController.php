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
        $inv=Investigacion::create([
            'nombre'=>$request["nombre"],
            'descripcion'=>$request["descripcion"],
            ]);
        $id_inv=Investigacion::find($inv->id);
        $area=$request["area"];
        foreach ($area as $a) {
            $areaSelec=Area::find($a);
            $id_inv->areas()->attach($areaSelec);
        }
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
        $investigacion=Investigacion::find($id);
        $areas=Area::get();
        $areas_seleccionadas=DB::table('desarrollo')
                                ->where('desarrollo.investigacion_id','=',$id)
                                ->lists('area_id');
        $vista=view('Investigacion.edicion',['areas'=>$areas,
                                    'seleccionadas'=>$areas_seleccionadas]);
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
}
