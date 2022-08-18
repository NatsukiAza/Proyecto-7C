<?php
	include('config/conexion.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Mi sistema E-Commerce</title>
<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/index2.css">
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="../css/queries.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 me-4 h1">Aromatic</span>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../adminpag.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="../ChatTReal/vistas/index.php">Chats</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Escribe algo.." aria-label="Search">
              <button class="btn btn-outline-light me-5" type="submit">Buscar</button>
            </form>
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="main.php" id="login">Admin</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

	<div class="main-container">

		<?php include("layout/_directorios.php"); ?>


		<div class="containerr">
		<div class="card">
  				<div class="card-body">
				  <div class="tit">
				  </div>	
					<h5 class="card-title">Nuevos Pedidos</h5>
    				<h6 class="card-subtitle mb-2">Ejemplo</h6>
    				<p class="card-text">Ejemplo</p>
					<p class="card-text">Ejemplo</p>
    				<div class="abajo">
						<span><a href="pedidos.php" class="card-link">Ver mas</a></span>
					</div>
  				</div>
			</div>

			<div class="card">
  				<div class="card-body">
				  <div class="tit">
				  </div>	
				  <h5 class="card-title">Ventas Hechas</h5>
    				<h6 class="card-subtitle mb-2">Ejemplo</h6>
    				<p class="card-text">Ejemplo</p>
					<p class="card-text">Ejemplo</p>
					<div class="abajo">
						<span><a href="pedidos.php" class="card-link">Ver mas</a></span>
					</div>
  				</div>
			</div>
		</div>
		
		<div class="containerr">
			<div class="card">
  				<div class="card-body">
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
			</div>

			<div class="card">
  				<div class="card-body">
				  <div class="tit">
				  </div>	
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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>