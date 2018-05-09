<!DOCTYPE html>
<html>
<head>
  <style>
    * {
      box-sizing: border-box;
    }
    .column {
      float: left;
      padding: 15px;
    }
    .principal::after {
      content: "";
      clear: both;
      display: table;
    }
    .izq {
      width: 50%;
    }
    .der {
      width: 50%;
    }
  </style>
</head>
<body>


  <div class="principal">
    <div class="column izq">
    	{!!Form::label('Descripcion:')!!}
  		{!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Ingresa la Descripcion'])!!}

  		{!!Form::label('Identificado Por:')!!}
  		{!!Form::text('identificado_por',null,['class'=>'form-control','placeholder'=>'Ingrese Identificado Por'])!!}

  		{!!Form::label('Responsable:')!!}
  		{!!Form::text('responsable',null,['class'=>'form-control','placeholder'=>'Ingresa El Responsable'])!!}

  		{!!Form::label('Fecha De Apertura:')!!}
  		{!!Form::date('fecha_apertura',null,['class'=>'form-control','placeholder'=>'Ingrese La Fecha De Apertura'])!!}	

  		{!!Form::label('Fecha De Cierre:')!!}
  		{!!Form::date('fecha_cierre',null,['class'=>'form-control','placeholder'=>'Ingrese La Fecha De Cierre'])!!}	

  		{!!Form::label('Fecha De Compromiso:')!!}
  		{!!Form::date('fecha_compro',null,['class'=>'form-control','placeholder'=>'Ingrese La Fecha De Compromiso'])!!}	

    </div>

    <div class="column der">

    

    {!!Form::label('Impacto:')!!}
    {!!Form::text('impacto',null,['class'=>'form-control','placeholder'=>'Ingresa el Impacto'])!!}    

    {!!Form::label('Accion Realizada:')!!}
    {!!Form::text('accion_realizada',null,['class'=>'form-control','placeholder'=>'Ingresa La Accion Realizada'])!!}

    {!!Form::label('Accion Efectiva:')!!}
    {!!Form::text('accion_efectiva',null,['class'=>'form-control','placeholder'=>'Ingresa La Accion Efectiva'])!!} 



    </div>
  </div>
</body>
</html>

