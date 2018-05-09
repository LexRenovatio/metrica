<?php namespace seminario;

use Illuminate\Database\Eloquent\Model;

class Riesgo extends Model 
{
	protected $table = "riesgos";
    protected $fillable = ['descripcion','identificado_por','responsable','fecha_apertura','fecha_cierre','fecha_compro','impacto','accion_realizada','accion_efectiva'];

}
