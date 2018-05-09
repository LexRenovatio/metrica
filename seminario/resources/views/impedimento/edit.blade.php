@extends('layouts.admin')
@section('contenido') 
	@include('alerts.request')
	{!!Form::model($impedimento,['route'=> ['impedimento.update',$impedimento->id], 'method'=>'PUT'])!!}
		@include('impedimento.forms.impedimento')
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	{!!Form::open(['route'=> ['impedimento.destroy',$impedimento->id], 'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}
@stop