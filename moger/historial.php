<?php
	session_start();
?>
<!DOCTYPE html>
<html>
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
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<title>Aromatic - Historial</title>
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
		<a href="historial.php">Compras realizadas</a>
		<a href="">Cerrar Sesión</a>
	</div>

		<div class="hist">
			<h1>Mis compras realizadas</h1>
			<div class="hist-list" id="space-list">
			</div>
		</div>
	</div>

	<?php include("footer2.php"); ?>

	<script type="text/javascript" src="js/main-scripts.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				url:'servicios/pedido/get_pedidos_all.php',
				type:'POST',
				data:{},
				success:function(data){
					console.log(data);
					let html='';
					for (var i = 0; i < data.datos.length; i++) {
						html+=
						'<div class="caja-detalle">'+
							'<div class="img">'+
								'<img src="assets/products/'+data.datos[i].rutimapro+'">'+
							'</div>'+
							'<div class="detalle">'+
								'<h3 class="mb5">'+data.datos[i].nompro+'</h3>'+
								'<p class="mb5">Fecha: '+data.datos[i].fecped+'</p>'+
								'<p class="mb5">Estado: '+data.datos[i].estadotxt+'</p>'+
								'<h4 class="mb5">'+formato_precio(data.datos[i].prepro)+'</h4>'+
							'</div>'+							
						'</div>';
					}
					document.getElementById("space-list").innerHTML=html;
				},
				error:function(err){
					console.error(err);
				}
			});
		});
		function formato_precio(valor){
			//10.99
			let svalor=valor.toString();
			let array=svalor.split(".");
			return "$ "+array[0]+".<span>"+array[1]+"</span>";
		}
	</script>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>