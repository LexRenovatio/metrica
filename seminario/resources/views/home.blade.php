@extends('layouts.admin')

@section('contenido') 

<div class="">
	  
  <center>
		<h2>Sr(a)  {!!Auth::user()->name!!} {!!Auth::user()->apellido!!}. </h2>
		
	</center>
	<br>

  <p class="lead" align="justify">
  	@include('alerts.errors')
	@include('alerts.success')
</div>

@stop