<?php
	include('config/conexion.php');
?>
<!DOCTYPE html>
<html>
<head>
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

	<div class="modal" id="modal-producto" style="display: none;">
		<div class="body-modal">
			<button class="btn-close" onclick="hide_modal('modal-producto')"><i class="fa fa-times" aria-hidden="true"></i></button>
			<h3>Añadir producto</h3>
			<input type="text" id="codigo" style="display: none;">
			<div class="div-flex">
				<label>Nombre</label>
				<input type="text" id="nombre">
			</div>
			<div class="div-flex">
				<label>Descripción</label>
				<input type="text" id="descripcion">
			</div>
			<div class="div-flex">
				<label>Precio</label>
				<input type="number" id="precio">
			</div>
			<div class="div-flex">
				<label>Stock</label>
				<input type="number" id="stock">
			</div>
			<div class="div-flex">
				<label>Estado</label>
				<select id="estado">
					<option value="1">Activo</option>
					<option value="0">Inactivo</option>
				</select>
			</div>
			<div class="div-flex">
				<input type="file" id="imagen">
			</div>
			<button onclick="save_producto()">Guardar</button>
		</div>
	</div>
	<div class="modal" id="modal-producto-edit" style="display: none;">
		<div class="body-modal">
			<button class="btn-close" onclick="hide_modal('modal-producto-edit')"><i class="fa fa-times" aria-hidden="true"></i></button>
			<h3>Editar producto</h3>
			<div class="div-flex">
				<label>Código</label>
				<input type="text" id="codigo-e" disabled>
			</div>
			<div class="div-flex">
				<label>Nombre</label>
				<input type="text" id="nombre-e">
			</div>
			<div class="div-flex">
				<label>Descripción</label>
				<input type="text" id="descripcion-e">
			</div>
			<div class="div-flex">
				<label>Precio</label>
				<input type="number" id="precio-e">
			</div>
			<div class="div-flex">
				<label>Stock</label>
				<input type="text" id="stock-e">
			<input type="text" id="rutimapro-aux" style="display: none;">
			<div class="div-flex">
				<label>Estado</label>
				<select id="estado-e">
					<option value="1">Activo</option>
					<option value="0">Inactivo</option>
				</select>
			</div>
			<img id="rutimapro" src="" style="width: 200px;margin: 5px auto;">
			<div class="div-flex">
				<input type="file" id="imagen-e">
			</div>
			</div>
			<button onclick="update_producto()">Actualizar</button>
		</div>
	</div>




		<?php include("layout/_directorios.php"); ?>

		<div id="main-container">

		<h1 id="tit">PANEL DE CONTROL</h1>

		<div id="tabla">

		<div id="row">
		<h1>USUARIO</h1>
		<input id="searchbar" onkeyup="search_animal()" type="text" name="search" placeholder="Buscar un producto"></li>
		</div>

			<table id="maldito">
				<thead>
					<tr>
						<th style="text-align: center; width: 10%;">Codigo</th>
						<th style="text-align: center; width: 15%">ID</th>
						<th style="text-align: center;">Nombre</th>
						<th style="text-align: center; width: 20%">Apellido</th>
						<th style="text-align: center; width: 20%">email</th>
						<th style="text-align: center; width: 3%" class="td-option">Opciones</th>
					</tr>
				</thead>				
				<tbody>
					<?php
						$sql="SELECT * from users";
						$resultado=mysqli_query($con,$sql);
						while ($row=mysqli_fetch_array($resultado)) {
							echo 
					'<tr>
						<td class="gorod"; style="text-align: center;" id="rosa">'.$row['user_id'].'</td>
						<td class="animals"; style="padding-left: 10px">'.$row['unique_id'].'</td>
						<td class="krovi"; style="padding-left: 10px" id="rosa">'.$row['fname'].'</td>
						<td class="der"; style="padding-left: 10px">'.$row['lname'].'</td>
						<td class="sendra"; style="padding-left: 10px">'.$row['email'].'</td>
						<td class="zetsubo"; style="padding-left: 11px" id="rosa" class="td-option">
							<div class="revelation"; style="margin-right: 0%;" class="div-flex div-td-button">
								<button class="nuketon"; id="minib" onclick="delete_usuario('.$row['user_id'].')"><i class="fa fa-trash" aria-hidden="true"></i></button>
							</div>
						</td>
					</tr>';
						}
					?>
				</tbody>
			</table>
		</div>
	</div>

	<?php include("footer3.php"); ?>

	<script type="text/javascript">
		function show_modal(id){
			document.getElementById(id).style.display="block";
		}
		function hide_modal(id){
			document.getElementById(id).style.display="none";
		}
		function delete_usuario(user_id){
			var c=confirm("Estas seguro de eliminar el producto de codigo "+user_id+"?");
			if (c) {
				let fd=new FormData();
				fd.append('user_id',user_id);
				let request=new XMLHttpRequest();
				request.open('POST','api/delete_product.php',true);
				request.onload=function(){
					if (request.readyState==4 && request.status==200) {
						let response=JSON.parse(request.responseText);
						console.log(response);
						if (response.state) {
							alert("Producto eliminado");
							window.location.reload();
						}else{
							alert(response.detail);
						}
					}
				}
				request.send(fd);
			}
		}

	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<script src="animals.js"></script>
</body>
</html>