@extends('layouts.admin')
@section('contenido') 
	@include('alerts.request')
	<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	
</head>
<body>
	<div class="container">
		<h1>Panel</h1>
		
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>{{ $post->title}}</h4>
				</div>
				<div class="panel-body">
					{{ $post->body }}
				
				</div>
			</div>
		
	</div>
</body>
</html>
@stop