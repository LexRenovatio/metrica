<?php

namespace seminario\Http\Controllers;

use Illuminate\Http\Request;
use seminario\Http\Requests;
use seminario\Http\Controllers\Controller;


class FrontController extends Controller {


	public function __construct(){
		$this->middleware('auth',['only'=>'home']);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()	{
		return view('login');
	}

	public function home()	{
		return view('home');
	}

	
}
	