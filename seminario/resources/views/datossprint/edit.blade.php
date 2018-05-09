@extends('layouts.admin')
@section('contenido') 
	@include('alerts.request')
	{!!Form::model($datossprint,['route'=> ['datossprint.update',$datossprint->id], 'method'=>'PUT'])!!}
		@include('datossprint.forms.datossprint')
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	{!!Form::open(['route'=> ['datossprint.destroy',$datossprint->id], 'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}
@stop