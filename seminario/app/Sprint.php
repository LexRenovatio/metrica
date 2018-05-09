<?php namespace seminario;

use Illuminate\Database\Eloquent\Model;

class Sprint extends Model 
{
	protected $table = "sprint";
    protected $fillable = ['ideal_trend','to_do','done_doing','doing','done'];

}
