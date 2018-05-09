@extends('layouts.admin')
@section('contenido') 
@include('alerts.request')

	{!!Form::open(['route'=>'datossprint.store', 'method'=>'POST'])!!}
		@include('datossprint.forms.datossprint')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop
