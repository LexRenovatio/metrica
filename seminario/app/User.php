<?php namespace seminario;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use DB;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'apellido', 'email', 'password', 'rol_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function setPasswordAttribute($valor){
		if(!empty($valor)){
			$this->attributes['password'] = \Hash::make($valor);
		}
	}

	public static function Users(){
		return DB::table('users')
			
			->join('roles','roles.id','=','users.rol_id')			
			->select('users.*', 'roles.nombre')
			->orderBy('id', 'asc')
			->get();
	}


}