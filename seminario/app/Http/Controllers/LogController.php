<?php namespace seminario\Http\Controllers;

use Auth;
use Session;
use Redirect;
use seminario\Http\Requests;
use seminario\Http\Requests\LoginRequest;
use seminario\Http\Controllers\Controller;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class LogController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(LoginRequest $request)
	{
		
		$client = new Client([
	    	'base_uri' => 'http://192.168.1.22:3000/usuarios'
		    ]);
			$usuario=$request['email'];
			$clave=$request['password'];
		    $response = $client->request('GET','usuarios', [
			    	'query' => [
			    		'email'  =>  $usuario , 
		        		'password'  =>  $clave , 
			    	]
		    	]);
			$posts= json_decode($response->getBody()->getContents() );
			
		if($posts != null ){
			
			return view('layouts.admin');
		}
		Session::flash('message-error','Datos Son Incorrectos');
		return Redirect::to('/');

		
		// if(Auth::attempt(['email'=> $request['email'],'password'=> $request['password']])){
		// 	return Redirect::to('home');
		// }
		// Session::flash('message-error','Datos Son Incorrectos');
		// return Redirect::to('/');
		
	}

	public function logout(){
		Auth::logout();
		return Redirect::to('/');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
