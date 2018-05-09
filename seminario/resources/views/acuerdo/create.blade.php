@extends('layouts.admin')
@section('contenido') 
@include('alerts.request')

	{!!Form::open(['route'=>'acuerdo.store', 'method'=>'POST'])!!}
		@include('acuerdo.forms.acuerdo')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop
