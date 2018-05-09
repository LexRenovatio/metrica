<?php namespace seminario\Http\Controllers;

use seminario\Http\Requests;
use seminario\Http\Requests\UserCreateRequest;
use seminario\Http\Requests\UserUpdateRequest;
use seminario\Http\Controllers\Controller;
use seminario\Rol;
use seminario\User;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class UsuarioController extends Controller {

	public function __construct(){
		// $this->middleware('auth');
		// $this->middleware('home');
		$this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
	}

	public function find(Route $route){
		$this->user = User::find($route->getParameter('usuario'));
		$this->notFound($this->user);
	}

	public function index()
	{
		$users = User::Users();
		// $nombrestipos = User::Tipos_docum();
		
		return view('usuario.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		$roles = Rol::lists('nombre', 'id');
        return view('usuario.create',compact('roles'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UserCreateRequest $request)
	{
		/*crear de una manera
		User::create([
			'name' => $request['name'],
			'email' => $request ['email'],
			'password' => $request['password'],
			]);
		*/
			User::create($request->all());
			
			Session::flash('message','Se Registro Correctamente El Usuario');
			return Redirect::to('/usuario');	
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
		// return view('usuario.edit',['user'=>$this->user]);
		// $roles = Rol::lists('nombre', 'id');
		// $tipo_documento = Tipo_documento::lists('tipo', 'id');
		// $ciudades = Ciudad::lists('nombre', 'id');

		$conte_rol = Rol::lists('nombre', 'id');
        return view('usuario.edit',['user'=>$this->user,'roles'=>$conte_rol]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update( UserUpdateRequest $request,$id)
	{
		$this->user->fill($request->all());
		$this->user->save();

		Session::flash('message','Usuario Editado Correctamente');
		return Redirect::to('/usuario');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->user->delete();
		Session::flash('message','Usuario Eliminado Correctamente');
		return Redirect::to('/usuario');
	}

}
