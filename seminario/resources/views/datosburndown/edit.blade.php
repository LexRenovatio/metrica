@extends('layouts.admin')
@section('contenido') 
	@include('alerts.request')
	{!!Form::model($datosburndown,['route'=> ['datosburndown.update',$datosburndown->id], 'method'=>'PUT'])!!}
		@include('datosburndown.forms.datosburndown')
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	{!!Form::open(['route'=> ['datosburndown.destroy',$datosburndown->id], 'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}
@stop