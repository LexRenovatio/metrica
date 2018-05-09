@extends('layouts.admin')
@section('contenido') 
@include('alerts.request')

	{!!Form::open(['route'=>'impedimento.store', 'method'=>'POST'])!!}
		@include('impedimento.forms.impedimento')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop
