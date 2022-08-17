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
                <a class="nav-link active" href="#">Chats</a>
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
	<div class="main-container">
		<?php include("layout/_directorios.php"); ?>
		<div class="body-page">
			<h2 style="text-align: center; margin-top: 1.7%; color: #bf5f82;"><b>Mis productos</b></h2>
			<table id="maldito" class="mt10">
				<thead>
					<tr>
						<th style="text-align: center; width: 7%;">Código</th>
						<th style="text-align: center; width: 15%">Nombre</th>
						<th style="text-align: center;">Descripción</th>
						<th style="text-align: center; width: 4%">Precio</th>
						<th style="text-align: center; width: 4%">Stock</th>
						<th style="text-align: center; width: 3%" class="td-option">Opciones</th>
					</tr>
				</thead>				
				<tbody>
					<?php
						$sql="SELECT * from producto";
						$resultado=mysqli_query($con,$sql);
						while ($row=mysqli_fetch_array($resultado)) {
							echo 
					'<tr>
						<td style="text-align: center;" id="rosa">'.$row['codpro'].'</td>
						<td style="padding-left: 10px">'.$row['nompro'].'</td>
						<td style="padding-left: 10px" id="rosa">'.$row['despro'].'</td>
						<td style="padding-left: 10px">'.$row['prepro'].'</td>
						<td style="padding-left: 10px">'.$row['prodst'].'</td>
						<td style="padding-left: 11px" id="rosa" class="td-option">
							<div style="margin-right: 0%;" class="div-flex div-td-button">
								<button id="minib" onclick="edit_product('.$row['codpro'].')"><i class="fa fa-pencil"  aria-hidden="true"></i></button>
								<button id="minib" onclick="delete_product('.$row['codpro'].')"><i class="fa fa-trash" aria-hidden="true"></i></button>
							</div>
						</td>
					</tr>';
						}
					?>
				</tbody>
			</table>
			<hr>
			<button class="agregar" onclick="show_modal('modal-producto')">Agregar nuevo</button>
		</div>
	</div>
	<script type="text/javascript">
		function show_modal(id){
			document.getElementById(id).style.display="block";
		}
		function hide_modal(id){
			document.getElementById(id).style.display="none";
		}
		function save_producto(){
			let fd=new FormData();
			fd.append('codigo',document.getElementById('codigo').value);
			fd.append('nombre',document.getElementById('nombre').value);
			fd.append('descripcion',document.getElementById('descripcion').value);
			fd.append('precio',document.getElementById('precio').value);
			fd.append('estado',document.getElementById('estado').value);
			fd.append('imagen',document.getElementById('imagen').files[0]);
			fd.append('stock',document.getElementById('stock').value);
			let request=new XMLHttpRequest();
			request.open('POST','api/producto_save.php',true);
			request.onload=function(){
				if (request.readyState==4 && request.status==200) {
					let response=JSON.parse(request.responseText);
					console.log(response);
					if (response.state) {
						alert("Producto guardado");
						window.location.reload();
					}else{
						alert(response.detail);
					}
				}
			}
			request.send(fd);
		}
		function delete_product(codpro){
			var c=confirm("Estas seguro de eliminar el producto de codigo "+codpro+"?");
			if (c) {
				let fd=new FormData();
				fd.append('codpro',codpro);
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

		function edit_product(codpro){
			let fd=new FormData();
			fd.append('codpro',codpro);
			let request=new XMLHttpRequest();
			request.open('POST','api/get_product.php',true);
			request.onload=function(){
				if (request.readyState==4 && request.status==200) {
					let response=JSON.parse(request.responseText);
					console.log(response);
					document.getElementById("codigo-e").value=codpro;
					document.getElementById("nombre-e").value=response.product.nompro;
					document.getElementById("descripcion-e").value=response.product.despro;
					document.getElementById("precio-e").value=response.product.prepro;
					document.getElementById("estado-e").value=response.product.estado;
					document.getElementById("rutimapro").src="../sistema-ecommerce/assets/products/"+response.product.rutimapro;
					document.getElementById("rutimapro-aux").value=response.product.rutimapro;
					document.getElementById("stock-e").value=response.product.prodst;
					show_modal('modal-producto-edit');
					//imagen-e
				}
			}
			request.send(fd);
		}

		function update_producto(){
			let fd=new FormData();
			fd.append('codigo',document.getElementById('codigo-e').value);
			fd.append('nombre',document.getElementById('nombre-e').value);
			fd.append('descripcion',document.getElementById('descripcion-e').value);
			fd.append('precio',document.getElementById('precio-e').value);
			fd.append('stock',document.getElementById('stock-e').value);
			fd.append('estado',document.getElementById('estado-e').value);
			fd.append('imagen',document.getElementById('imagen-e').files[0]);
			fd.append('rutimapro',document.getElementById("rutimapro-aux").value);
			let request=new XMLHttpRequest();
			request.open('POST','api/producto_update.php',true);
			request.onload=function(){
				if (request.readyState==4 && request.status==200) {
					let response=JSON.parse(request.responseText);
					console.log(response);
					if (response.state) {
						alert("Producto actualizado");
						window.location.reload();
					}else{
						alert(response.detail);
					}
				}
			}
			request.send(fd);
		}
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>