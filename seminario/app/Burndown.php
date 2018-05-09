<?php namespace seminario;

use Illuminate\Database\Eloquent\Model;

class Burndown extends Model 
{
	protected $table = "burndown";
    protected $fillable = ['total_puntos','dias_sprint','puntos_dia'];

}
