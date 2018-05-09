<?php 
namespace seminario\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Closure;
Use Session;

class Home {

	protected $auth;

	public function __construct(Guard $auth){
		$this->auth = $auth;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		// if($this->auth->user()->rol_id != 1 && $this->auth->user()->rol_id != 2 ){
		// 	Session::flash('message-error','Sin Privilegios');
		// 	return redirect()->to('home');
		// }
		return $next($request);
	}

}
