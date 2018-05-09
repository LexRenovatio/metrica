<div class="form-group">
	{!!Form::label('Descripcion:')!!}
	{!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Ingresa La Descripcion'])!!}	

	{!!Form::label('Tomado Por:')!!}
	{!!Form::text('tomado_por',null,['class'=>'form-control','placeholder'=>'Tomado Por'])!!}	

	{!!Form::label('Fecha:')!!}
	{!!Form::date('fecha',null,['class'=>'form-control','placeholder'=>'Ingresa La Fecha'])!!}	

	{!!Form::label('Comentarios:')!!}
	{!!Form::text('comentarios',null,['class'=>'form-control','placeholder'=>'Ingresa Los Comentarios'])!!}		
</div>