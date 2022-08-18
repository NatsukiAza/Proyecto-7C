<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Mi sistema E-Commerce</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/boot.css">
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
                <a class="nav-link active" aria-current="page" href="../index.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="../ChatTReal/vistas/index.php">Chats</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Tienda
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="pedido.php">Pedidos</a></li>
                  <li><a class="dropdown-item" href="carrito.php">Carrito</a></li>
                  <li><a class="dropdown-item" href="historial.php">Historial</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Escribe algo.." aria-label="Search">
              <button class="btn btn-outline-light me-5" type="submit">Buscar</button>
            </form>
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php" id="login">Iniciar sesion</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

	<div class="main-content">
		<div class="content-page">
			<div class="title-section">Mis compras realizadas</div>
			<div class="products-list" id="space-list">
			</div>
		</div>
	</div>

	<footer style="text-align: center;" class="info">
      <p class="licencia">El contenido esta disponible bajo la licencia de Gragus Corp a menos que se indique lo contrario</p>
      <a style="margin-right: 5%;" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Facebook</a>
      <a style="margin-right: 5%;" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Instagram</a>
      <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Twitter</a>
      <p style="margin-bottom: 0;">+54 9 11 5506 8746</p>
    </footer>

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
						'<div class="caja-detalle mb5">'+
							'<div class="img">'+
								'<img src="assets/products/'+data.datos[i].rutimapro+'">'+
							'</div>'+
							'<div class="detalle">'+
								'<h3 class="mb5">'+data.datos[i].nompro+'</h3>'+
								'<p class="mb5">Fecha: '+data.datos[i].fecped+'</p>'+
								'<p class="mb5">Estado: '+data.datos[i].estadotxt+'</p>'+
								'<p class="mb5">'+data.datos[i].despro+'</p>'+
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
			return "S/. "+array[0]+".<span>"+array[1]+"</span>";
		}
	</script>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>