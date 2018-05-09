@extends('layouts.admin')
@section('contenido')
@include('alerts.success')
<div class="table-responsive">
	<table class="table">
		<thead>
			<th>Descripcion</th>
			<th>Tomado Por</th>
			<th>Fecha</th>
			<th>Comentarios</th>			
			
						
		</thead>
		@foreach($conteacuerdos as $acuerdo)
		<tbody>
			<td>{{$acuerdo->descripcion}}</td>
			<td>{{$acuerdo->tomado_por}}</td>
			<td>{{$acuerdo->fecha}}</td>
			<td>{{$acuerdo->comentarios}}</td>
			
		</tbody>
		@endforeach		
	</table>
</div>

@stop