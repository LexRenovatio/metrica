@extends('layouts.admin')
@section('contenido') 
@include('alerts.request')

	{!!Form::open(['route'=>'burndown.store', 'method'=>'POST'])!!}
		@include('burndown.forms.burndown')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop
