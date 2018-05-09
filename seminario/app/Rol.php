<?php namespace seminario;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model 
{
	protected $table = "roles";
    protected $fillable = ['nombre'];

}
