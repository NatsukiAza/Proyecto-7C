<?php
	session_start();
	$response=new stdClass();
	include_once('../_conexion.php');

	$unique_id=$_SESSION['unique_id'];
	$dirusu=$_POST['dirusu'];
	$telusu=$_POST['telusu'];
	$tipopago=$_POST['tipopago'];
	$token=$_POST['token'];

	if ($tipopago==1) {
		$estado=2;
	}else{
		$estado=3;
	}

	$sql="UPDATE pedido SET dirusuped='$dirusu',telusuped='$telusu',estado=$estado,token='$token'
	where estado=1 and userid=$userid";
	$result=mysqli_query($con,$sql);
	if ($result) {
		$response->state=true;
	}else{
		$response->state=false;
		$response->sql=$sql;
		$response->detail="No se pudo actualizar el pedido. Intente más tarde";
	}

	mysqli_close($con);
	header('Content-Type: application/json');
	echo json_encode($response);