<?php
	session_start();
	if (!isset($_SESSION['codusu'])) {
		header('location: index.php');
	}
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
          <span class="navbar-brand mb-0 me-4 h1"><a class="tots" href="../index.html">Aromatic</a></span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Tienda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="ChatTReal/vistas/index.php">Chats</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="pedido.php">Pedidos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="historial.php">Historial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="carrito.php">Carrito</a>
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
			<h3>Mi carrito</h3>
			<div class="body-pedidos" id="space-list">
			</div>
			<input class="ipt-procom" type="text" id="dirusu" placeholder="Dirección">
			<br>
			<input class="ipt-procom" type="text" id="telusu" placeholder="Celular">
			<br>
			<h4>Tipos de pago</h4>
			<div class="metodo-pago">
				<input type="radio" name="tipopago" value="1" id="tipo1">
				<label for="tipo1">Pago por transferencia</label>
			</div>
			<div class="metodo-pago">
				<input type="radio" name="tipopago" value="2" id="tipo2">
				<label for="tipo2">Pago con tarjeta de crédito/débito</label>
			</div>
			<button onclick="procesar_compra()" style="margin-top: 5px;">Procesar compra</button>
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
				url:'servicios/pedido/get_porprocesar.php',
				type:'POST',
				data:{},
				success:function(data){
					console.log(data);
					let html='';
					let sumaMonto=0;
					for (var i = 0; i < data.datos.length; i++) {
						html+=
						'<div class="item-pedido">'+
							'<div class="pedido-img">'+
								'<img src="assets/products/'+data.datos[i].rutimapro+'">'+
							'</div>'+
							'<div class="pedido-detalle">'+
								'<h3>'+data.datos[i].nompro+'</h3>'+
								'<p><b>Precio:</b> S/ '+data.datos[i].prepro+'</p>'+
								'<p><b>Fecha:</b> '+data.datos[i].fecped+'</p>'+
								'<p><b>Estado:</b> '+data.datos[i].estado+'</p>'+
								'<p><b>Dirección:</b> '+data.datos[i].dirusuped+'</p>'+
								'<p><b>Celular:</b> '+data.datos[i].telusuped+'</p>'+
								'<button class="btn-delete-cart" onclick="delete_product('+data.datos[i].codped+')">Eliminar</button>'+
							'</div>'+
						'</div>';
						sumaMonto+=parseInt(data.datos[i].prepro)+1;
					}
					if (data.datos.length==0) {
						alert("No hay productos en carrito");
						window.history.back();
					}
				    Culqi.settings({
				        title: 'Mi tienda',
				        currency: 'PEN',
				        description: 'Productos escolares',
				        amount: sumaMonto
				    });
					document.getElementById("space-list").innerHTML=html;
				},
				error:function(err){
					console.error(err);
				}
			});
		});
		function delete_product(codped){
			$.ajax({
				url:'servicios/pedido/delete_pedido.php',
				type:'POST',
				data:{
					codped:codped,
				},
				success:function(data){
					console.log(data);
					if (data.state) {
						window.location.reload();
					}else{
						alert(data.detail);
					}
				},
				error:function(err){
					console.error(err);
				}
			});
		}
		function procesar_compra(){
			let dirusu=document.getElementById("dirusu").value;
			let telusu=$("#telusu").val();
			let tipopago=1;
			if (document.getElementById("tipo2").checked) {
				tipopago=2;
			}
			if (dirusu=="" || telusu=="") {
				alert("Complete los campos");
			}else{
				if (!document.getElementById("tipo1").checked &&
					!document.getElementById("tipo2").checked) {
					alert("Seleccione un método de pago!");
				}else{
					if (tipopago==2) {
						Culqi.open();
					}else{
						$.ajax({
							url:'servicios/pedido/confirm.php',
							type:'POST',
							data:{
								dirusu:dirusu,
								telusu:telusu,
								tipopago:tipopago,
								token:''
							},
							success:function(data){
								console.log(data);
								if (data.state) {
									window.location.href="pedido.php";
								}else{
									alert(data.detail);
								}
							},
							error:function(err){
								console.error(err);
							}
						});
					}
				}
			}
		}
		function culqi() {
			if (Culqi.token) { 
		      	var token = Culqi.token.id;
		      	$.ajax({
					url:'servicios/pedido/confirm.php',
					type:'POST',
					data:{
						dirusu:document.getElementById("dirusu").value,
						telusu:$("#telusu").val(),
						tipopago:2,
						token:token
					},
					success:function(data){
						console.log(data);
						if (data.state) {
							window.location.href="pedido.php";
						}else{
							alert(data.detail);
						}
					},
					error:function(err){
						console.error(err);
					}
				});
		  	} else {
		      	console.log(Culqi.error);
		      	alert(Culqi.error.user_message);
		  	}
		};
	</script>
	<script src="https://checkout.culqi.com/js/v3"></script>
	<script>
	    Culqi.publicKey = 'pk_test_3adf22bd8acf4efc';
	</script>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>