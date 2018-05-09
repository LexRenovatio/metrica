@extends('layouts.admin')
@section('contenido') 
	@include('alerts.request')
	{!!Form::model($burndown,['route'=> ['burndown.update',$burndown->id], 'method'=>'PUT'])!!}
		@include('burndown.forms.burndown')
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	{!!Form::open(['route'=> ['burndown.destroy',$burndown->id], 'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}
@stop