<?php

namespace seminario\Http\Controllers;

use seminario\Http\Requests;
use seminario\Http\Controllers\Controller;
use seminario\Burndown;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class BurndownController extends Controller{
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
        $conteburndown = Burndown::All();
        return view('burndown.index',compact('conteburndown'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('burndown.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Burndown::create([
            'total_puntos' => $request['total_puntos'],
            'dias_sprint' => $request['dias_sprint'],
            'puntos_dia' => $request['puntos_dia'],
            ]);

        Session::flash('message','Se Registro Correctamente Los Datos Del Burndown');
        return Redirect::to('/burndown');
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
        $burndown = Burndown::find($id);
        return view('burndown.edit',['burndown'=>$burndown]);
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
        $burndown = Burndown::find($id);
        $burndown->fill($request->all());
        $burndown->save();

        Session::flash('message','Datos Basicos Del Burndown Editado Correctamente');
        return Redirect::to('/burndown');
    }

    public function registros( Request $request)
    {
        $burndown = Burndown::find($id);
        $burndown->fill($request->all());
        $burndown->save();

        Session::flash('message','Datos Basicos Del Burndown Editado Correctamente');
        return Redirect::to('/burndown');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Burndown::destroy($id);
        Session::flash('message','Datos Basicos Del Burndown Eliminado Correctamente');
        return Redirect::to('/burndown');
    }

    public function mostrarCursos()
    {
        $burndown = $this->obtenerTodosLosCursos();
        return view('burndown.todos',['burndown'=>$burndown]);
    }

    protected function obtenerTodosLosCursos()
    {
        $respuesta = $this->realizarPeticion('GET','https://apilumen.juandmegon.com/burndown');
        $datos = json_decode($respuesta);
        $burndown =$datos->data;
        return $burndown;
    }
}
