@extends('layouts.admin')
@section('contenido')
@include('alerts.success')


<div class="table-responsive">
	<table class="table">

	<form id="form1" runat="server">
		<div id="container" style=" width: 90%; height: 90%; "></div>
	</form>

		<thead>
			<th>Dias Habiles</th>
			<th>Ideal Trend</th>
			<th>To Do</th>
			<th>Done Doing</th>
			<th>Doing</th>
			<th>done</th>
			<!-- <th>Operacion</th> -->
		</thead>
		@foreach($contesprint as $sprint)
		<tbody>
			<td>{{$sprint->dias_habiles}}</td>
			<td>{{$sprint->ideal_trend}}</td>
			<td>{{$sprint->to_do}}</td>
			<td>{{$sprint->done_doing}}</td>
			<td>{{$sprint->doing}}</td>
			<td>{{$sprint->done}}</td>
			<!-- <td>
				{!!link_to_route('sprint.edit', $title = 'Editar', $parameters = $sprint->dias_habiles, $attributes = ['class'=>'btn btn-primary'])!!}
				{!!Form::open(['route'=> ['sprint.destroy',$sprint->dias_habiles], 'method'=>'DELETE'])!!}
					{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}
			</td> -->
		</tbody>
		@endforeach		
	</table>

	

		<script type="text/javascript">
		var idealtrend = [ 
				@foreach($contesprint as $sprint) 
					{{ $sprint->ideal_trend}},
				@endforeach	
			];
		var todo = [ 
				@foreach($contesprint as $sprint) 
					{{ $sprint->to_do}},
				@endforeach	
			];
		var donedoing = [ 
				@foreach($contesprint as $sprint) 
					{{ $sprint->done_doing}},
				@endforeach	
			];
			Highcharts.chart('container', {

		    title: {
		        text: 'Sprint X - Burndown '
		    },

		    subtitle: {
		        text: 'Metricas'
		    },

		    yAxis: {
		        title: {
		            text: 'Sprint 3 - Puntos'
		        }
		    },
		    legend: {
		        layout: 'vertical',
		        align: 'right',
		        verticalAlign: 'middle'
		    },

		    plotOptions: {
		        series: {
		            label: {
		                connectorAllowed: false
		            },
		            pointStart: 01
		        }
		    },

		    series: [{
		        name: 'Ideal Trend',
		        data: idealtrend
		    }, {
		        name: 'To Do',
		        data: todo
		    }, {
		        name: 'Done + Doing',
		        data: donedoing
		    }],
		       
		    responsive: {
		        rules: [{
		            condition: {
		                maxWidth: 500
		            },
		            chartOptions: {
		                legend: {
		                    layout: 'horizontal',
		                    align: 'center',
		                    verticalAlign: 'bottom'
		                }
		            }
		        }]
		    }

		});

		</script>

</div>

@stop