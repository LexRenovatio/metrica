<?php

namespace seminario\Http\Controllers;

use seminario\Http\Requests;
use seminario\Http\Controllers\Controller;
use seminario\Impedimento;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class ImpedimentoController extends Controller{
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
        $conteimpedimentos = Impedimento::All();
        return view('impedimento.index',compact('conteimpedimentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('impedimento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Impedimento::create([
            'descripcion' => $request['descripcion'],
            'identificado_por' => $request['identificado_por'],
            'responsable' => $request['responsable'],
            'fecha_apertura' => $request['fecha_apertura'],
            'fecha_actualizacion' => $request['fecha_actualizacion'],
            'fecha_cierre' => $request['fecha_cierre'],
            'comentarios' => $request['comentarios'],
            ]);

        Session::flash('message','Se Registro Correctamente El Impedimento');
        return Redirect::to('/impedimento');
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
        $impedimento = Impedimento::find($id);
        return view('impedimento.edit',['impedimento'=>$impedimento]);
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
        $impedimento = Impedimento::find($id);
        $impedimento->fill($request->all());
        $impedimento->save();

        Session::flash('message','Impedimento Editado Correctamente');
        return Redirect::to('/impedimento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Impedimento::destroy($id);
        Session::flash('message','Impedimento Eliminado Correctamente');
        return Redirect::to('/impedimento');
    }
}
