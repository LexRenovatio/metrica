
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
    	{!!Form::label('Nombre:')!!}
  		{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}

  		{!!Form::label('Apellido:')!!}
  		{!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Ingresa el Apellido del usuario'])!!}<br>	

    </div>

    <div class="column der">

    

    {!!Form::label('Correo:')!!}
    {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Correo del usuario'])!!}

    {!!Form::label('Password:')!!}
    {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa el nombre del usuario'])!!}
    
    {!!Form::label('Rol','Rol:')!!}<br>
    {!!Form::select('rol_id',$roles)!!}<br><br>


    </div>
  </div>
</body>
</html>

