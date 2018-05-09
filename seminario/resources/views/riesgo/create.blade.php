@extends('layouts.admin')
@section('contenido') 
@include('alerts.request')

	{!!Form::open(['route'=>'riesgo.store', 'method'=>'POST'])!!}
		@include('riesgo.forms.riesgo')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop
