<?php

namespace seminario\Http\Controllers;

use seminario\Http\Requests;
use seminario\Http\Controllers\Controller;
use seminario\Sprint;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use GuzzleHttp\Client;

class SprintController extends Controller{
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
        // $contesprint = Sprint::All();
        // return view('sprint.index',compact('contesprint'));


        $client = new Client([
            'base_uri' => 'http://192.168.1.22:3002/burndown',
        ]);
        $response = $client->request('GET','burndown');
        $contesprint= json_decode($response->getBody()->getContents() );
        return view('sprint.index', compact('contesprint'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sprint.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sprint::create([
            'ideal_trend' => $request['ideal_trend'],
            ]);

        Session::flash('message','Se Registro Correctamente El Sprint');
        return Redirect::to('/sprint');
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
    public function edit($dias_habiles)
    {
        $sprint = Sprint::find($dias_habiles);
        return view('sprint.edit',['sprint'=>$sprint]);
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
        $sprint = Sprint::find($id);
        $sprint->fill($request->all());
        $sprint->save();

        Session::flash('message','Sprint Editado Correctamente');
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
        Sprint::destroy($id);
        Session::flash('message','Sprint Eliminado Correctamente');
        return Redirect::to('/sprint');
    }
}
