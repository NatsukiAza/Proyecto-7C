<?php
	session_start();
	$unique_id=$_SESSION['unique_id'];
?>
	<!DOCTYPE html>
	<html>
	<head>
	<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Montserrat&family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Oswald:wght@400;500;700&family=Quicksand:wght@300;400;500;700&family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/queries.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Aromatic - Perfil</title>
</head>
<body>

<div class="cubre"></div>
  <?php include("navbar2.php"); ?>

	<div class="c1">

	<div class="pan">
		<h2>Hola,</h2>
		<h1>Usuario</h1>
		<img width="50%" src="../img/usericon.png" alt="foto">

		<a href="perfil.php">Datos personales</a>
		<a href="favoritos.php">Mis favoritos</a>
		<a href="historial.php">Compras realizadas</a>
		<a href="">Cerrar Sesión</a>
	</div>

	

	<div class="dat" id="space-list">

	<script type="text/javascript">
		$(document).ready(function(){	
			$.ajax({
				url:'servicios/usuario.php',
				type:'POST',
				data:{},
				success:function(data){
					console.log(data);
					let html='';
							document.getElementById("nombre").innerHTML=data.datos[0].fname;
							document.getElementById("apellido").innerHTML=data.datos[0].lname;
						
					document.getElementById("space-list").innerHTML=html;
				},
				error:function(err){
					console.error(err);
				}
			});
		});
		</script>

		<h1>Datos Personales</h1>
		<div class="ci">
			<button>Editar</button>
			<h2>Informacion Personal</h2>
			<h3 id=nombre>Juan Perez de Barradas</h3>	
			<h5>Av. Larrazabal 483</h5>	
			<h5>Liniers, CABA, 1408</h5>	
		</div>

		<div class=ci>
			<button>Editar</button>
			<h2>Opciones de contacto</h2>
			<h6>Dejanos saber la mejor opcion para contactarte</h6>
			<h4>E-Mail</h4>
			<h5>Juanperezdebarradas@gmail.com</h5>	
			<h4>Celular</h4>
			<h5>+54 11 5506-8746</h5>	
		</div>

		<div class=ci>
			<button>Editar</button>
			<h2>Contraseña y seguridad</h2>
			<h6>Administra tu configuracion de inicio de sesion y de seguridad</h6>
		</div>

		<div class=ci>
			<button id="eliminar">Eliminar</button>
			<h2>Eliminar mi perfil</h2>
			<h6>Proceder va a eliminar los datos de tu perfil</h6>
		</div>
		
	</div>
	</div>

	<?php include("footer2.php"); ?>
	
	
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>
