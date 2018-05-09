<?php namespace seminario\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

	//Para bloquear  url no disponibles
	public function notFound($value){
		if(! $value){
			abort(404);
		}
	}

}
