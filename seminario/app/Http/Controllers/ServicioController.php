<?php
namespace seminario\Http\Controllers;
use GuzzleHttp\Client;

class ServicioController extends Controller {

	public function index()	{

		$client = new Client([
	    	'base_uri' => 'http://jsonplaceholder.typicode.com',
	    ]);
		$usuario="Bret";
		$clave=2;
	    $response = $client->request('GET','users', [
		    	'query' => [
		    		'id'  =>  $clave , 
	        		'username'  =>  $usuario , 
		    	]
	    	]);
		$posts= json_decode($response->getBody()->getContents() );
		return view('posts.index', compact('posts'));
	}

	public function show($id){

		$client = new Client([
	    	'base_uri' => 'http://jsonplaceholder.typicode.com',
	    ]);

	    $response = $client->request('GET',"posts/{$id}");
		$post= json_decode($response->getBody()->getContents() );
		return view('posts.show', compact('post'));
	}
}

// $ response  =  $ client -> request ( 'POST' ,  'http://httpbin.org/post' ,  [ 
//     'form_params'  =>  [ 
//         'field_name'  =>  'abc' , 
//         'other_field'  =>  '123' , 
//         'nested_field'  =>  [ 
//             'anidado'  =>  'hola' 
//         ] 
//     ] 
// ]);