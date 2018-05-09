@extends('layouts.admin')
@section('contenido')
@include('alerts.success')
<div class="table-responsive">
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Operacion</th>
		</thead>
		@foreach($conteroles as $rol)
		<tbody>
			<td>{{$rol->nombre}}</td>
			<td>
				{!!link_to_route('rol.edit', $title = 'Editar', $parameters = $rol->id, $attributes = ['class'=>'btn btn-primary'])!!}
				{!!Form::open(['route'=> ['rol.destroy',$rol->id], 'method'=>'DELETE'])!!}
					{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}
			</td>
		</tbody>
		@endforeach		
	</table>
</div>

@stop