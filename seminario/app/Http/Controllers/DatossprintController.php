<?php

namespace seminario\Http\Controllers;

use seminario\Http\Requests;
use seminario\Http\Controllers\Controller;
use seminario\Datossprint;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class DatossprintController extends Controller{
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
        $contedatossprint = Datossprint::All();
        return view('datossprint.index',compact('contedatossprint'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datossprint.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Datossprint::create([
            'doing' => $request['doing'],
            'done' => $request['done'],
            ]);

        Session::flash('message','Se Registro Correctamente Los Datos Los Datossprint');
        return Redirect::to('/datossprint');
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
        $datossprint = Datossprint::find($id);
        return view('datossprint.edit',['datossprint'=>$datossprint]);
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
        $datossprint = Datossprint::find($id);
        $datossprint->fill($request->all());
        $datossprint->save();

        Session::flash('message','Datos Basicos Del Sprint Editado Correctamente');
        return Redirect::to('/sprint');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Datossprint::destroy($id);
        Session::flash('message','Datos Basicos Del Sprint Eliminado Correctamente');
        return Redirect::to('/datossprint');
    }
}
