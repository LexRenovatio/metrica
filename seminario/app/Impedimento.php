<?php namespace seminario;

use Illuminate\Database\Eloquent\Model;

class Impedimento extends Model 
{
	protected $table = "impedimentos";
    protected $fillable = ['descripcion','identificado_por','responsable','fecha_apertura','fecha_actualizacion','fecha_cierre','comentarios'];

}
