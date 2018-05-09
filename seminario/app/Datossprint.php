<?php namespace seminario;

use Illuminate\Database\Eloquent\Model;

class Datossprint extends Model 
{
	protected $table = "datossprint";
    protected $fillable = ['doing','done'];

}
