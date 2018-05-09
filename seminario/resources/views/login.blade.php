<!DOCTYPE >
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Seminario</title>
	<link href="css/stylelogin.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".username").focus(function() {
				$(".user-icon").css("left","-48px");
			});
			$(".username").blur(function() {
				$(".user-icon").css("left","0px");
			});

			$(".password").focus(function() {
				$(".pass-icon").css("left","-48px");
			});
			$(".password").blur(function() {
				$(".pass-icon").css("left","0px");
			});
		});
	</script>

</head>
<body>

	<div id="wrapper">
		<div class="user-icon"></div>
    	<div class="pass-icon"></div>
    	@include('alerts.errors')
    	@include('alerts.Request')


		{!!Form::open(['route'=>'log.store','method'=>'POST','class'=>'login-form'])!!}	
			<div class="header">
				<h1>Iniciar Sesión</h1>
				<span>Seminario</span>
			</div>
			<div class="content">
			{!!Form::email('email',null,['class'=>'input username','placeholder'=>'Ingresa Su Correo','onfocus'=>"this.value==''"])!!}
			{!!Form::password('password',['class'=>'input password','placeholder'=>'Contraseña','onfocus' => "this.value==''"])!!}
			
			</div>
			<div class="footer">
				{!!Form::submit('Iniciar',['class'=>'button'])!!}
			</div>
			
		{!!Form::close()!!}
	</div>

</body>
</html>