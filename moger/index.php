<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Montserrat&family=Oswald:wght@400;700&family=Quicksand:wght@300;400;500;700&family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/queries.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Aromatic - Tienda</title>
</head>
<body>

	<div class="cubre"></div>
	<?php include("navbar2.php"); ?>
	<div class="oferta">Conseguí un 20% de descuento en la segunda unidad de cualquier producto que compres</div>
	
	<div class="c1">
		<div class="filtros">

			<h1>Filtros</h1>

			<h2>Productos</h2>

			<label class="container">Perfumes
  				<input type="checkbox">
  				<span class="checkmark"></span>
			</label>

			<label class="container">Aromatizadores
  				<input type="checkbox">
  				<span class="checkmark"></span>
			</label>

			<label class="container">Aerosoles
  				<input type="checkbox">
  				<span class="checkmark"></span>
			</label>

			<label class="container">Difusores
  				<input type="checkbox">
  				<span class="checkmark"></span>
			</label>

			<label class="container">Aromas
  				<input type="checkbox">
  				<span class="checkmark"></span>
			</label>

			<label class="container">Sahumerios
  				<input type="checkbox">
  				<span class="checkmark"></span>
			</label>

			<label class="container">Jabones
  				<input type="checkbox">
  				<span class="checkmark"></span>
			</label>

			<label class="container">Sanitizantes
  				<input type="checkbox">
  				<span class="checkmark"></span>
			</label>

			<label class="container">Aceites
  				<input type="checkbox">
  				<span class="checkmark"></span>
			</label>

			<label class="container">Otros
  				<input type="checkbox">
  				<span class="checkmark"></span>
			</label>

		</div>
			<div class="products-list" id="space-list">
			</div>
	</div>

	<?php include("footer2.php"); ?>

	<script type="text/javascript" src="js/main-scripts.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				url:'servicios/producto/get_all_products.php',
				type:'POST',
				data:{},
				success:function(data){
					console.log(data);
					let html='';
					for (var i = 0; i < data.datos.length; i++) {
						html+=
						'<div class="product-box">'+
							'<a href="producto.php?p='+data.datos[i].codpro+'">'+
								'<div class="product">'+
									'<img src="assets/products/'+data.datos[i].rutimapro+'">'+
									'<div class="detail-title">'+data.datos[i].nompro+'</div>'+
									'<div class="detail-price">'+formato_precio(data.datos[i].prepro)+'</div>'+
								'</div>'+
							'</a>'+
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