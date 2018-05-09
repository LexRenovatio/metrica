<?php namespace seminario;

use Illuminate\Database\Eloquent\Model;

class Datosburndown extends Model 
{
	protected $table = "datosburndown";
    protected $fillable = ['total_puntos','dias_sprint'];

}
