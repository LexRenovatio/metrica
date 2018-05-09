<?php

namespace seminario\Http\Controllers;

use seminario\Http\Requests;
use seminario\Http\Controllers\Controller;
use seminario\Acuerdo;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class AcuerdoController extends Controller{
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
        $conteacuerdos = Acuerdo::All();
        return view('acuerdo.index',compact('conteacuerdos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('acuerdo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Acuerdo::create([
            'descripcion' => $request['descripcion'],
            'tomado_por' => $request['tomado_por'],
            'fecha' => $request['fecha'],
            'comentarios' => $request['comentarios'],
            ]);

        Session::flash('message','Se Registro Correctamente El Acuerdo');
        return Redirect::to('/acuerdo');
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
        $acuerdo = Acuerdo::find($id);
        return view('acuerdo.edit',['acuerdo'=>$acuerdo]);
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
        $acuerdo = Acuerdo::find($id);
        $acuerdo->fill($request->all());
        $acuerdo->save();

        Session::flash('message','Acuerdo Editado Correctamente');
        return Redirect::to('/acuerdo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Acuerdo::destroy($id);
        Session::flash('message','Acuerdo Eliminado Correctamente');
        return Redirect::to('/acuerdo');
    }
}
