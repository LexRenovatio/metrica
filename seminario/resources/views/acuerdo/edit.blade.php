@extends('layouts.admin')
@section('contenido') 
	@include('alerts.request')
	{!!Form::model($acuerdo,['route'=> ['acuerdo.update',$acuerdo->id], 'method'=>'PUT'])!!}
		@include('acuerdo.forms.acuerdo')
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	{!!Form::open(['route'=> ['acuerdo.destroy',$acuerdo->id], 'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}
@stop