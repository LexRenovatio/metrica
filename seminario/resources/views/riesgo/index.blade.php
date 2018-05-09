@extends('layouts.admin')
@section('contenido')
@include('alerts.success')
<div class="table-responsive">
	<table class="table">
		<thead>
			<th>Descripcion</th>
			<th>Identificado Por</th>
			<th>Responsable</th>
			<th>Fecha De Apertura</th>
			<th>Fecha De Cierre</th>
			<th>Fecha De Compromiso</th>
			<th>Impacto</th>
			<th>Accion Realizada</th>
			<th>Accion Efectiva</th>
			@if(Auth::user()->rol_id == 1)
			<th>Operacion</th>
			@endif
		</thead>
		@foreach($conteriesgos as $riesgo)
		<tbody>
			<td>{{$riesgo->descripcion}}</td>
			<td>{{$riesgo->identificado_por}}</td>
			<td>{{$riesgo->responsable}}</td>
			<td>{{$riesgo->fecha_apertura}}</td>
			<td>{{$riesgo->fecha_cierre}}</td>
			<td>{{$riesgo->fecha_compro}}</td>
			<td>{{$riesgo->impacto}}</td>
			<td>{{$riesgo->accion_realizada}}</td>
			<td>{{$riesgo->accion_efectiva}}</td>
			@if(Auth::user()->rol_id == 1)
			<td>
				{!!link_to_route('riesgo.edit', $title = 'Editar', $parameters = $riesgo->id, $attributes = ['class'=>'btn btn-primary'])!!}
				{!!Form::open(['route'=> ['riesgo.destroy',$riesgo->id], 'method'=>'DELETE'])!!}
					{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}
			</td>
			@endif 
		</tbody>
		@endforeach		
	</table>
</div>

@stop