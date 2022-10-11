<?php
?>
<!DOCTYPE html>
<html>
<head>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Montserrat&family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Oswald:wght@400;500;700&family=Quicksand:wght@300;400;500;700&family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
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

	<div class="dat">
		<h1>Mis Favoritos</h1>
		<div class="nf">
			<h2>Todavia no marcaste ningun producto como favorito, cuando lo hagas, aparecera aquí</h2>
			<img width="100%" src="../img/cora.png" alt="Corazon">
		</div>

	</div>
	</div>

	<?php include("footer2.php"); ?>

	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>