@extends('layouts.admin')
@section('contenido') 
	@include('alerts.request')
	{!!Form::model($riesgo,['route'=> ['riesgo.update',$riesgo->id], 'method'=>'PUT'])!!}
		@include('riesgo.forms.riesgo')
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	{!!Form::open(['route'=> ['riesgo.destroy',$riesgo->id], 'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}
@stop