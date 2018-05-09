@extends('layouts.admin')
@section('contenido')
@include('alerts.success')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<div class="table-responsive">
	<table class="table">
		<thead>
			<th>Total Puntos</th>
			<th>Dias Del Sprint</th>
			<th>Operacion</th>
		</thead>
		@foreach($contedatosburndown as $datosburndown)
		<tbody>
			<td>{{$datosburndown->total_puntos}}</td>
			<td>{{$datosburndown->dias_sprint}}</td>
			<td>
				{!!link_to_route('datosburndown.edit', $title = 'Editar', $parameters = $datosburndown->id, $attributes = ['class'=>'btn btn-primary'])!!}
				{!!Form::open(['route'=> ['datosburndown.destroy',$datosburndown->id], 'method'=>'DELETE'])!!}
					{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}
			</td>
		</tbody>
		@endforeach		
	</table>
</div>

@stop