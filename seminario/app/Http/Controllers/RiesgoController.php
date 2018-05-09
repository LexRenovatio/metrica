<?php

namespace seminario\Http\Controllers;

use seminario\Http\Requests;
use seminario\Http\Controllers\Controller;
use seminario\Riesgo;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class RiesgoController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        // $this->middleware('auth');
        // $this->middleware('home');
    }
    public function index()
    {
        $conteriesgos = Riesgo::All();
        return view('riesgo.index',compact('conteriesgos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('riesgo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Riesgo::create([
            'descripcion' => $request['descripcion'],
            'identificado_por' => $request['identificado_por'],
            'responsable' => $request['responsable'],
            'fecha_apertura' => $request['fecha_apertura'],
            'fecha_cierre' => $request['fecha_cierre'],
            'fecha_compro' => $request['fecha_compro'],
            'impacto' => $request['impacto'],
            'accion_realizada' => $request['accion_realizada'],
            'accion_efectiva' => $request['accion_efectiva'],
            ]);

        Session::flash('message','Se Registro Correctamente El Riesgo');
        return Redirect::to('/riesgo');
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
        $riesgo = Riesgo::find($id);
        return view('riesgo.edit',['riesgo'=>$riesgo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $riesgo = Riesgo::find($id);
        $riesgo->fill($request->all());
        $riesgo->save();

        Session::flash('message','Riesgo Editado Correctamente');
        return Redirect::to('/riesgo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Riesgo::destroy($id);
        Session::flash('message','Riesgo Eliminado Correctamente');
        return Redirect::to('/riesgo');
    }
}
