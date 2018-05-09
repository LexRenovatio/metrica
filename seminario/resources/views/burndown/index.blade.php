@extends('layouts.admin')
@section('contenido')
@include('alerts.success')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<style type="text/css">
	*{
		margin: 0;
	}
	

	.tabla{
		background-color: white; 
		padding-bottom: 50px;

	}

	.encabezado{
		color:white;
		background-color: #3c8dbc;
	}

	.tabla tr td input{
		width: 80%;

	}
	td, th {
    padding: 5px;
	}
</style>


<div class="table-responsive">
	<table class="table">
		<thead>
			<th>Total Puntos</th>
			<th>Dias Del Sprint</th>
			<th>Punto Por Dia</th>
			<!-- <th>Operacion</th> -->
		</thead>
		@foreach($conteburndown as $burndown)
		<tbody>
			<td>{{$burndown->total_puntos}}</td>
			<td>{{$burndown->dias_sprint}}</td>
			<td>{{$burndown->puntos_dia}}</td>
			<td>
				<!-- {!!link_to_route('burndown.edit', $title = 'Editar', $parameters = $burndown->id, $attributes = ['class'=>'btn btn-primary'])!!}
				{!!Form::open(['route'=> ['burndown.destroy',$burndown->id], 'method'=>'DELETE'])!!}
					{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!} -->
			</td>
		</tbody>
		@endforeach		
	</table>
</div>
<section class="contenedor">
			
			<table class="tabla">
				<tr>
					<td class="encabezado" >Total Puntos</td>
					<td class="encabezado">Dias Sprint</td>
					<td class="encabezado">Puntos Dia</td>
				</tr>
				<tr>
					<td><input type="text" name="salario" id="total_puntos"></td>
					<td><input type="text" name="dias" id="dias_sprint"></td>
					<td><input type="number" disabled="disabled" name="puntos_dia" id="puntos_dia"></td>
				</tr>
				<tr>
					<td class="encabezado" >Dias Habiles Sprint</td>
					<td class="encabezado">Ideal Trend</td>
					<td class="encabezado">To Do</td>
					<td class="encabezado" >Done + Doing</td>
					<td class="encabezado">Doing</td>
					<td class="encabezado">Done</td>
				</tr>
				
				<tr>
					<td><input type="text" name="dias_habiles" id="dias_habiles"></td>	
					<td><input type="number" disabled="disabled" name="ideal_trend" id="ideal_trend"></td>
					<td><input type="number" disabled="disabled" name="to_do" id="to_do"></td>
					<td><input type="number" disabled="disabled" name="done_doing" id="done_doing"></td>
					<td><input type="text" name="doing" id="doing"></td>
					<td><input type="text" name="done" id="done"></td>
				</tr>
				
				<tr>
					<td><input type="text" name="dias_habiles2" id="dias_habiles2"></td>	
					<td><input type="number" disabled="disabled" name="ideal_trend2" id="ideal_trend2"></td>
					<td><input type="number" disabled="disabled" name="to_do2" id="to_do2"></td>
					<td><input type="number" disabled="disabled" name="done_doing2" id="done_doing2"></td>
					<td><input type="text" name="doing2" id="doing2"></td>
					<td><input type="text" name="done2" id="done2"></td>
				</tr>

				<tr>
					<td><input type="text" name="dias_habiles3" id="dias_habiles3"></td>	
					<td><input type="number" disabled="disabled" name="ideal_trend3" id="ideal_trend3"></td>
					<td><input type="number" disabled="disabled" name="to_do3" id="to_do3"></td>
					<td><input type="number" disabled="disabled" name="done_doing3" id="done_doing3"></td>
					<td><input type="text" name="doing3" id="doing3"></td>
					<td><input type="text" name="done3" id="done3"></td>
				</tr>

				<tr>
					<td><input type="text" name="dias_habiles4" id="dias_habiles4"></td>	
					<td><input type="number" disabled="disabled" name="ideal_trend4" id="ideal_trend4"></td>
					<td><input type="number" disabled="disabled" name="to_do4" id="to_do4"></td>
					<td><input type="number" disabled="disabled" name="done_doing4" id="done_doing4"></td>
					<td><input type="text" name="doing4" id="doing4"></td>
					<td><input type="text" name="done4" id="done4"></td>
				</tr>

				<tr>
					<td><input type="text" name="dias_habiles5" id="dias_habiles5"></td>	
					<td><input type="number" disabled="disabled" name="ideal_trend5" id="ideal_trend5"></td>
					<td><input type="number" disabled="disabled" name="to_do5" id="to_do5"></td>
					<td><input type="number" disabled="disabled" name="done_doing5" id="done_doing5"></td>
					<td><input type="text" name="doing5" id="doing5"></td>
					<td><input type="text" name="done5" id="done5"></td>
				</tr>

			</table>
			<!--<spam style='background-color: white;width: 100%;'>TOTALES</spam>-->
		</section>

		<script type="text/javascript">
			$(function(){
				$('#total_puntos').on('change',function(){
					var total_puntos = document.getElementById('total_puntos').value;
					var dias_sprint = document.getElementById('dias_sprint').value;
					var doing = document.getElementById('doing').value;
					var done = document.getElementById('done').value;

					var puntos_dia = total_puntos/(dias_sprint-1) ;
					var ideal_trend = total_puntos;
					var to_do = total_puntos-done;				
					var done_doing = parseInt(doing) + parseInt(done);

					$('#puntos_dia').val(puntos_dia);
					$('#ideal_trend').val(ideal_trend);
					$('#to_do').val(to_do);
					$('#done_doing').val(done_doing);

				});

				$('#dias_sprint').on('change',function(){
					var total_puntos = document.getElementById('total_puntos').value;
					var dias_sprint = document.getElementById('dias_sprint').value;
					var doing = document.getElementById('doing').value;
					var done = document.getElementById('done').value;

					var puntos_dia = total_puntos/(dias_sprint-1) ;
					var ideal_trend = total_puntos;
					var to_do = total_puntos-done;				
					var done_doing = parseInt(doing) + parseInt(done);

					$('#puntos_dia').val(puntos_dia);
					$('#ideal_trend').val(ideal_trend);
					$('#to_do').val(to_do);
					$('#done_doing').val(done_doing);

				});

				$('#doing').on('change',function(){
					var total_puntos = document.getElementById('total_puntos').value;
					var dias_sprint = document.getElementById('dias_sprint').value;
					var doing = document.getElementById('doing').value;
					var done = document.getElementById('done').value;

					var puntos_dia = total_puntos/(dias_sprint-1) ;
					var ideal_trend = total_puntos;
					var to_do = total_puntos-done;				
					var done_doing = parseInt(doing) + parseInt(done);

					$('#puntos_dia').val(puntos_dia);
					$('#ideal_trend').val(ideal_trend);
					$('#to_do').val(to_do);
					$('#done_doing').val(done_doing);

				});

				$('#done').on('change',function(){
					var total_puntos = document.getElementById('total_puntos').value;
					var dias_sprint = document.getElementById('dias_sprint').value;
					var doing = document.getElementById('doing').value;
					var done = document.getElementById('done').value;

					var puntos_dia = total_puntos/(dias_sprint-1) ;
					var ideal_trend = total_puntos;
					var to_do = total_puntos-done;				
					var done_doing = parseInt(doing) + parseInt(done);

					$('#puntos_dia').val(puntos_dia);
					$('#ideal_trend').val(ideal_trend);
					$('#to_do').val(to_do);
					$('#done_doing').val(done_doing);

				});


				$('#doing2').on('change',function(){
					var ideal_trend = document.getElementById('ideal_trend').value;
					var dias_sprint = document.getElementById('dias_sprint').value;
					var to_do = document.getElementById('to_do').value;
					var done = document.getElementById('done').value;
					var doing2 = document.getElementById('doing2').value;
					var done2 = document.getElementById('done2').value;

					var ideal_trend2 = ideal_trend-dias_sprint ;
					var to_do2 = to_do-done2;				
					var done_doing2 = parseInt(doing2) + parseInt(done2) + parseInt(done);

					$('#ideal_trend2').val(ideal_trend2);
					$('#to_do2').val(to_do2);
					$('#done_doing2').val(done_doing2);

				});

				$('#done2').on('change',function(){
					var ideal_trend = document.getElementById('ideal_trend').value;
					var dias_sprint = document.getElementById('dias_sprint').value;
					var to_do = document.getElementById('to_do').value;
					var done = document.getElementById('done').value;
					var doing2 = document.getElementById('doing2').value;
					var done2 = document.getElementById('done2').value;

					var ideal_trend2 = ideal_trend-dias_sprint ;
					var to_do2 = to_do-done2;				
					var done_doing2 = parseInt(doing2) + parseInt(done2)+ parseInt(done);

					$('#ideal_trend2').val(ideal_trend2);
					$('#to_do2').val(to_do2);
					$('#done_doing2').val(done_doing2);

				});

				$('#doing3').on('change',function(){
					var ideal_trend2 = document.getElementById('ideal_trend2').value;
					var dias_sprint = document.getElementById('dias_sprint').value;
					var to_do2 = document.getElementById('to_do2').value;
					var doing3 = document.getElementById('doing3').value;
					var done3 = document.getElementById('done3').value;
					var done2 = document.getElementById('done2').value;
					var done = document.getElementById('done').value;

					var ideal_trend3 = ideal_trend2-dias_sprint ;
					var to_do3 = to_do2-done3;				
					var done_doing3 = parseInt(doing3) + parseInt(done3) + parseInt(done2)+ parseInt(done);

					$('#ideal_trend3').val(ideal_trend3);
					$('#to_do3').val(to_do3);
					$('#done_doing3').val(done_doing3);

				});

				$('#done3').on('change',function(){
					var ideal_trend2 = document.getElementById('ideal_trend2').value;
					var dias_sprint = document.getElementById('dias_sprint').value;
					var to_do2 = document.getElementById('to_do2').value;
					var doing3 = document.getElementById('doing3').value;
					var done3 = document.getElementById('done3').value;
					var done2 = document.getElementById('done2').value;
					var done = document.getElementById('done').value;

					var ideal_trend3 = ideal_trend2-dias_sprint ;
					var to_do3 = to_do2-done3;				
					var done_doing3 = parseInt(doing3) + parseInt(done3) + parseInt(done2)+ parseInt(done);

					$('#ideal_trend3').val(ideal_trend3);
					$('#to_do3').val(to_do3);
					$('#done_doing3').val(done_doing3);

				});

				$('#doing4').on('change',function(){
					var ideal_trend3 = document.getElementById('ideal_trend3').value;
					var dias_sprint = document.getElementById('dias_sprint').value;
					var to_do3 = document.getElementById('to_do3').value;
					var doing4 = document.getElementById('doing4').value;
					var done4 = document.getElementById('done4').value;
					var done3 = document.getElementById('done3').value;
					var done2 = document.getElementById('done2').value;
					var done = document.getElementById('done').value;

					var ideal_trend4 = ideal_trend3-dias_sprint ;
					var to_do4 = to_do3-done4;				
					var done_doing4 = parseInt(doing4) + parseInt(done4) + parseInt(done3) + parseInt(done2)+ parseInt(done);

					$('#ideal_trend4').val(ideal_trend4);
					$('#to_do4').val(to_do4);
					$('#done_doing4').val(done_doing4);

				});

				$('#done4').on('change',function(){
					var ideal_trend3 = document.getElementById('ideal_trend3').value;
					var dias_sprint = document.getElementById('dias_sprint').value;
					var to_do3 = document.getElementById('to_do3').value;
					var doing4 = document.getElementById('doing4').value;
					var done4 = document.getElementById('done4').value;
					var done3 = document.getElementById('done3').value;
					var done2 = document.getElementById('done2').value;
					var done = document.getElementById('done').value;

					var ideal_trend4 = ideal_trend3-dias_sprint ;
					var to_do4 = to_do3-done4;				
					var done_doing4 = parseInt(doing4) + parseInt(done4) + parseInt(done3) + parseInt(done2)+ parseInt(done);

					$('#ideal_trend4').val(ideal_trend4);
					$('#to_do4').val(to_do4);
					$('#done_doing4').val(done_doing4);

				});

				$('#doing5').on('change',function(){
					var ideal_trend4 = document.getElementById('ideal_trend4').value;
					var dias_sprint = document.getElementById('dias_sprint').value;
					var to_do4 = document.getElementById('to_do4').value;
					var doing5 = document.getElementById('doing5').value;
					var done5 = document.getElementById('done5').value;
					var done4 = document.getElementById('done4').value;
					var done3 = document.getElementById('done3').value;
					var done2 = document.getElementById('done2').value;
					var done = document.getElementById('done').value;

					var ideal_trend5 = ideal_trend4-dias_sprint ;
					var to_do5 = to_do4-done5;				
					var done_doing5 = parseInt(doing5) + parseInt(done5)  + parseInt(done4) + parseInt(done3) + parseInt(done2)+ parseInt(done);

					$('#ideal_trend5').val(ideal_trend5);
					$('#to_do5').val(to_do5);
					$('#done_doing5').val(done_doing5);

				});

				$('#done5').on('change',function(){
					var ideal_trend4 = document.getElementById('ideal_trend4').value;
					var dias_sprint = document.getElementById('dias_sprint').value;
					var to_do4 = document.getElementById('to_do4').value;
					var doing5 = document.getElementById('doing5').value;
					var done5 = document.getElementById('done5').value;
					var done4 = document.getElementById('done4').value;
					var done3 = document.getElementById('done3').value;
					var done2 = document.getElementById('done2').value;
					var done = document.getElementById('done').value;

					var ideal_trend5 = ideal_trend4-dias_sprint ;
					var to_do5 = to_do4-done5;				
					var done_doing5 = parseInt(doing5) + parseInt(done5)  + parseInt(done4) + parseInt(done3) + parseInt(done2)+ parseInt(done);

					$('#ideal_trend5').val(ideal_trend5);
					$('#to_do5').val(to_do5);
					$('#done_doing5').val(done_doing5);

				});




			});
		</script>
@stop