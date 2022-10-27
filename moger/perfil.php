<?php
	session_start();
	$unique_id=$_SESSION['unique_id'];
	include('servicios/_conexion.php');	
?>
	<!DOCTYPE html>
	<html>
	<head>
	<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Montserrat&family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Oswald:wght@400;500;700&family=Quicksand:wght@300;400;500;700&family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
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
  <?php include("navbar2.php"); 
  if (!isset($_SESSION['unique_id'])) {
	header('location: index.php');
}
else{
	$sql="SELECT * from users where $unique_id = unique_id";
	$resultado=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($resultado)) {
		 
	echo 
	'<div class="c1">
  
	  <div class="pan">
		  <h2>Hola,</h2>
		  <h1>Usuario</h1>
		  <img width="50%" src="../img/usericon.png" alt="foto">
  
		  <a href="perfil.php">Datos personales</a>
		  <a href="historial.php">Compras realizadas</a>
		  <a href="">Cerrar Sesión</a>
	  </div>
	  <?php
	  <div class="dat">
  
		  <h1>Datos Personales</h1>
		  <div class="ci">
			  <button>Editar</button>
			  <h2>Informacion Personal</h2>
			  <h3>'.$row['fname'].'</h3>	
			  <h5>'.$row['lname'].'</h5>	
		  </div>
  
		  <div class=ci>
			  <h4>E-Mail</h4>
			  <h5>'.$row['email'].'</h5>	
		  </div>
  
		  <div class=ci>
			  <button id="eliminar">Eliminar</button>
			  <h2>Eliminar mi perfil</h2>
			  <h6>Proceder va a eliminar los datos de tu perfil</h6>
		  </div>
		  
	  </div>
	  </div>';
						  }}
  
					?>
				</tbody>
			</table>
			<hr>
		</div>
	</div>

	<?php include("footer2.php"); ?>
	
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
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>
