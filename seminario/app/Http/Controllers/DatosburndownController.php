<?php

namespace seminario\Http\Controllers;

use seminario\Http\Requests;
use seminario\Http\Controllers\Controller;
use seminario\Datosburndown;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class DatosburndownController extends Controller{
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
        $contedatosburndown = Datosburndown::All();
        return view('datosburndown.index',compact('contedatosburndown'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datosburndown.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Datosburndown::create([
            'total_puntos' => $request['total_puntos'],
            'dias_sprint' => $request['dias_sprint'],
            ]);

        Session::flash('message','Se Registro Correctamente Los Datos Del Datosburndown');
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
        $datosburndown = Datosburndown::find($id);
        return view('datosburndown.edit',['datosburndown'=>$datosburndown]);
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
        $datosburndown = Datosburndown::find($id);
        $datosburndown->fill($request->all());
        $datosburndown->save();

        Session::flash('message','Datos Basicos Del Datosburndown Editado Correctamente');
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
        Datosburndown::destroy($id);
        Session::flash('message','Datos Basicos Del Datosburndown Eliminado Correctamente');
        return Redirect::to('/datosburndown');
    }
}
