@extends('layouts.admin')
@section('contenido')
@include('alerts.success')
<div class="table-responsive">
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Apellido</th>
			
			<th>Correo</th>
			
			<th>Rol</th>
			<th>Operacion</th>
		</thead>
		@foreach($users  as $user)
		<tbody>
			<td>{{$user->name}}</td>
			<td>{{$user->apellido}}</td>			
			<td>{{$user->email}}</td>			
			<td>{{$user->nombre}}</td>
			<td>
				{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}
				{!!Form::open(['route'=> ['usuario.destroy',$user->id], 'method'=>'DELETE'])!!}
					{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}
			</td>
		</tbody>
		@endforeach		
	</table>
	</div>
@stop


