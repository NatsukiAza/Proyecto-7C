<?php
	include('config/conexion.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/index2.css">
    <link rel="stylesheet" type="text/css" href="../css/queries.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Aromatic - Panel de control</title>
</head>
<body>

	<div class="main-container">

		<?php include("layout/_directorios.php"); ?>

		<div class="sidemenu">

			<div class="foto">
				<img width="100%" src="../img/usericon.png" alt="Icono">
				<h5 style="padding-top: 10px;" >Administrador</h5>
			</div>

			<div class="mensajes">
			<a href="" class="nvmsg">Nuevos Mensajes</a>
			</div>

		</div>

		<div id="c3">

			<div id="li">
			<div id="i">
				<div class="tit">
				</div>	
				<h1 class="card-title">Nuevos Pedidos</h5>
    			<h2 class="card-subtitle mb-2">Ejemplo</h6>
    			<p class="card-text">Ejemplo</p>
				<p class="card-text">Ejemplo</p>
    			<div class="abajo">
					<span><a href="pedidos.php" class="card-link">Ver mas</a></span>
				</div>
  			</div>

			<div id="i">
				<h5 class="card-title">Ventas Hechas</h5>
    			<h6 class="card-subtitle mb-2">Ejemplo</h6>
    			<p class="card-text">Ejemplo</p>
				<p class="card-text">Ejemplo</p>
				<div class="abajo">
					<span><a href="pedidos.php" class="card-link">Ver mas</a></span>
				</div>
			</div>
			</div>

			<div id="ld">
			<div id="i">
				<div class="tit">
				</div>	
				<h5 class="card-title">Productos con poco stock</h5>
    			<h6 class="card-subtitle mb-2">Ejemplo</h6>
    			<p class="card-text">Ejemplo</p>
				<p class="card-text">Ejemplo</p>
    			<div class="abajo">
					<span><a href="pedidos.php" class="card-link">Ver mas</a></span>
				</div>
  			</div>

			<div id="i">
				<h5 class="card-title">Ventas realizadas en el Mes</h5>
    			<h6 class="card-subtitle mb-2">Ejemplo</h6>
    			<p class="card-text">Ejemplo</p>
				<p class="card-text">Ejemplo</p>
    			<div class="abajo">
					<span><a href="pedidos.php" class="card-link">Ver mas</a></span>
				</div>
  			</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>