@extends('layouts.admin')
@section('contenido') 
	@include('alerts.request')
	{!!Form::model($sprint,['route'=> ['sprint.update',$sprint->dias_habiles], 'method'=>'PUT'])!!}
		@include('sprint.forms.sprint')
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	{!!Form::open(['route'=> ['sprint.destroy',$sprint->dias_habiles], 'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}
@stop