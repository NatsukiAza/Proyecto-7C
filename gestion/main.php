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

<?php include("layout/_directorios.php"); ?>

<div id="main-container">

	<h1 id="tit">PANEL DE CONTROL</h1>

		<div id="c3">

			<div id="fc">

			<div id="c">

				<div id="mc">
					<h1>Bienvenida de vuelta !</h1>
					<h2>Panel del administrador</h2>
				</div>

				<div id="bc">
					<div id="col">
						<img width="65px" src="../img/usericon.png" alt="fotousuario">
						<h1>Administrador</h1>
					</div>

					<div id="col">
						<h1>Numero</h1>
						<h2>Productos</h2>
					</div>

					<div id="col">
						<h1>$Numero</h1>
						<h2>Ingresos</h2>
					</div>

				</div>

  			</div>

			<div id="c5">
				<h1>Productos con poco stock</h1>

    			<table id="tini">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Stock</th>
					</tr>
				</thead>	
				<tbody>
				<?php
					$i = 0;
					
						$sql="SELECT * from producto where prodst<30";
						$resultado=mysqli_query($con,$sql);
						for ($i=0;$i<3;$i++)	 {
						if ($row=mysqli_fetch_array($resultado)) {
							echo 
					'<tr>
						<td class="animals">'.$row['nompro'].'</td>
						<td class="sendra">'.$row['prodst'].'</td>	
						</td>
					</tr>';
						}}	
					?>
				</tbody>
				</table>

			</div>
			</div>


			<div id="s">

			<div id="r">

				<div id="c2">
					<h1>Ventas</h5>
    				<h2>Numero</h6>
  				</div>

				<div id="c2">
					<h1>Ventas</h5>
    				<h2>Numero</h6>
  				</div>

				<div id="c2">
					<h1>Ventas</h5>
    				<h2>Numero</h6>
				</div>

			</div>


			<div id="c4"> 
				<h1>Ventas</h5>
    			<h2>Numero</h6>
			</div>

		</div>

	</div>

	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>