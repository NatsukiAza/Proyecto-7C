<?php
session_start();
$response=new stdClass();

if (!isset($_SESSION['unique_id'])) {
	$response->state=false;
	$response->detail="No esta logeado";
	$response->open_login=true;
}else{
	include_once('../_conexion.php');
	$unique_id=$_SESSION['unique_id'];
	$codpro=$_POST['codpro'];
	$sql="INSERT INTO pedido
	(unique_id,codpro,fecped,estado,dirusuped,telusuped)
	VALUES
	($unique_id,$codpro,now(),1,'','')";
	$result=mysqli_query($con,$sql);
	if ($result) {
		$response->state=true;
		$response->detail="Producto agregado";
	}else{
		$response->state=false;
		$response->detail="No se pudo agregar producto. Intente más tarde";
	}
	mysqli_close($con);
}

header('Content-Type: application/json');
echo json_encode($response);