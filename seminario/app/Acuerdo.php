<?php namespace seminario;

use Illuminate\Database\Eloquent\Model;

class Acuerdo extends Model 
{
	protected $table = "acuerdos";
    protected $fillable = ['descripcion','tomado_por','fecha','comentarios'];

}
