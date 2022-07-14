<?php
	include('config/conexion.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administracion | Productos</title>
	<link rel="stylesheet" href="css/boot.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/queries.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
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
                <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Chats</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Contacto
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">WhatsApp</a></li>
                  <li><a class="dropdown-item" href="#">Instagram</a></li>
                  <li><a class="dropdown-item" href="#">Facebook</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Escribe algo.." aria-label="Search">
              <button class="btn btn-outline-light me-5" type="submit">Buscar</button>
            </form>
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.html" id="login">Iniciar sesion</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

	<div class="main-container">
		<?php include("layout/_directorios.php"); ?>
		<div class="body-page">
			<h2>Inicio / Pendientes de despacho</h2>
			<table class="mt10">
				<thead>
					<tr>
						<th>Código</th>
						<th>Usuario</th>
						<th>Producto</th>
						<th>Fecha</th>
						<th>Estado</th>
						<th>Dirección</th>
						<th>Teléfono</th>
						<th>Opciones</th>
					</tr>
				</thead>				
				<tbody>
					<?php
							$sql="SELECT ped.*,usu.*,pro.*,
							CASE WHEN ped.estado=2
							THEN 'Por pagar'
							ELSE 
								CASE WHEN ped.estado=3
									THEN 'Por entregar'
									ELSE
									CASE WHEN ped.estado=4
										THEN 'En camino'
										ELSE 'Otro'
									END
								END
							END estadotexto, ped.estado estadoped
							from pedido ped
							inner  join usuario usu
							on ped.codusu=usu.codusu
							inner  join producto pro
							on ped.codpro=pro.codpro
							where ped.estado=2 or ped.estado=3 or ped.estado=4";
						$resultado=mysqli_query($con,$sql);
						while ($row=mysqli_fetch_array($resultado)) {
							echo 
					'<tr>
						<td>'.$row['codped'].'</td>
						<td>'.$row['codusu'].' - '.$row['nomusu'].'</td>
						<td>'.$row['codpro'].' - '.$row['nompro'].'</td>
						<td>'.$row['fecped'].'</td>
						<td>'.$row['estadotexto'].'</td>
						<td>'.$row['dirusuped'].'</td>
						<td>'.$row['telusuped'].'</td>';
						if ($row['estadoped']==4) {
							echo
						'<td class="td-option">
							<button onclick="confirmar_entrega('.$row['codped'].')">Entregado</button>
						</td>';	
						}else{
							echo
						'<td class="td-option">
							<button onclick="despachado('.$row['codped'].')">Despachar</button>
						</td>';
						}
						echo
					'</tr>';
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
	<script type="text/javascript">
		function show_modal(id){
			document.getElementById(id).style.display="block";
		}
		function hide_modal(id){
			document.getElementById(id).style.display="none";
		}
		function despachado(codped){
			let fd=new FormData();
			fd.append('codped',codped);
			let request=new XMLHttpRequest();
			request.open('POST','api/pedido_confirm.php',true);
			request.onload=function(){
				if (request.readyState==4 && request.status==200) {
					let response=JSON.parse(request.responseText);
					console.log(response);
					if (response.state) {
						window.location.reload();
					}else{
						alert(response.detail);
					}
				}
			}
			request.send(fd);
		}
		function confirmar_entrega(codped){
			let fd=new FormData();
			fd.append('codped',codped);
			let request=new XMLHttpRequest();
			request.open('POST','api/pedido_confirm_entrega.php',true);
			request.onload=function(){
				if (request.readyState==4 && request.status==200) {
					let response=JSON.parse(request.responseText);
					console.log(response);
					if (response.state) {
						window.location.reload();
					}else{
						alert(response.detail);
					}
				}
			}
			request.send(fd);
		}
	</script>
</body>
</html>