@extends('layouts.admin')
@section('contenido')
@include('alerts.success')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<div class="table-responsive">
	<table class="table">
		<thead>
			<th>Doing</th>
			<th>Done</th>
			<th>Total Puntos</th>
			<th>Puntos Dia</th>
			<!-- <th>Operacion</th> -->
		</thead>
		@foreach($contedatossprint as $datossprint)
		<tbody>
			<td>{{$datossprint->doing}}</td>
			<td>{{$datossprint->done}}</td>
			<td>{{$datossprint->total_puntos}}</td>
			<td>{{$datossprint->puntos_dia}}</td>
			<td>
				{!!link_to_route('datossprint.edit', $title = 'Editar', $parameters = $datossprint->id, $attributes = ['class'=>'btn btn-primary'])!!}
				{!!Form::open(['route'=> ['datossprint.destroy',$datossprint->id], 'method'=>'DELETE'])!!}
					{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}
			</td>
		</tbody>
		@endforeach		
	</table>
</div>

@stop