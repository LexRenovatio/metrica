<?php

namespace seminario\Http\Controllers;

use seminario\Http\Requests;
use seminario\Http\Controllers\Controller;
use seminario\Rol;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class RolController extends Controller{
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
        $conteroles = Rol::All();
        return view('rol.index',compact('conteroles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rol.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Rol::create([
            'nombre' => $request['nombre'],
            ]);

        Session::flash('message','Se Registro Correctamente El Rol');
        return Redirect::to('/rol');
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
        $rol = Rol::find($id);
        return view('rol.edit',['rol'=>$rol]);
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
        $rol = Rol::find($id);
        $rol->fill($request->all());
        $rol->save();

        Session::flash('message','Rol Editado Correctamente');
        return Redirect::to('/rol');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rol::destroy($id);
        Session::flash('message','Rol Eliminado Correctamente');
        return Redirect::to('/rol');
    }
}
