@extends('layouts.admin')
@section('contenido')
@include('alerts.success')
<div class="table-responsive">
	<table class="table">
		<thead>
			<th>Descripcion</th>
			<th>Identificado Por</th>
			<th>Responsable</th>
			<th>Fecha Apertura</th>	
			<th>Fecha Actualizacion</th>
			<th>Fecha Cierre</th>	
			<th>Comentarios</th>		
			@if(Auth::user()->rol_id == 1)
			<th>Operacion</th>
			@endif
		</thead>
		@foreach($conteimpedimentos as $impedimento)
		<tbody>
			<td>{{$impedimento->descripcion}}</td>
			<td>{{$impedimento->identificado_por}}</td>
			<td>{{$impedimento->responsable}}</td>
			<td>{{$impedimento->fecha_apertura}}</td>
			<td>{{$impedimento->fecha_actualizacion}}</td>
			<td>{{$impedimento->fecha_cierre}}</td>			
			<td>{{$impedimento->comentarios}}</td>
			@if(Auth::user()->rol_id == 1)
			<td>
				{!!link_to_route('impedimento.edit', $title = 'Editar', $parameters = $impedimento->id, $attributes = ['class'=>'btn btn-primary'])!!}
				{!!Form::open(['route'=> ['impedimento.destroy',$impedimento->id], 'method'=>'DELETE'])!!}
					{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}
			</td>
			@endif 
		</tbody>
		@endforeach		
	</table>
</div>

@stop