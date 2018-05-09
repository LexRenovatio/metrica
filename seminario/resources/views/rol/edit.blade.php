@extends('layouts.admin')
@section('contenido') 
	@include('alerts.request')
	{!!Form::model($rol,['route'=> ['rol.update',$rol->id], 'method'=>'PUT'])!!}
		@include('rol.forms.rol')
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	{!!Form::open(['route'=> ['rol.destroy',$rol->id], 'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}
@stop