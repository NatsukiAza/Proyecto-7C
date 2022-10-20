<?php
	include("../config/conexion.php");
	$response=new stdClass();

	$user_id=$_POST['user_id'];
	$sql="select * from users where user_id=$user_id";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	$contador=mysqli_num_rows($result);
	if ($contador>0) {
		$sql="update users set status='Desconectado ahora' where user_id=$user_id";
		$result=mysqli_query($con,$sql);
		if ($result) {
			$response->state=true;
		}else{
			$response->state=false;
			$response->detail="No se puede eliminar el producto";
		}
	}else{
		$sql="select img from users where user_id=$user_id";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($result);
		$img=$row['img'];

		$sql="delete from users
		where user_id=$user_id";
		$result=mysqli_query($con,$sql);
		if ($result) {
			$response->state=true;
			//recuerda que debes redireccionar al nombre de proyecto correcto
			// ejm: sistema-ecommerce-master
			unlink("../ChatTReal/modelo/images/".$img);
		}else{
			$response->state=false;
			$response->detail="No se puede eliminar el producto";
		}
	}

	echo json_encode($response);