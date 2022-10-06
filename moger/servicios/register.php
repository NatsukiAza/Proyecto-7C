<?php
//1: Error de conexion
//2: Email invalido
//3: Contraseña incorrecta
include('_conexion.php');
$email=$_POST['email'];
$sql="SELECT * FROM USUARIO WHERE email='$email'";
$result=mysqli_query($con,$sql);
if ($result) {
	$row=mysqli_fetch_array($result);
	$count=mysqli_num_rows($result);
	if ($count==0) {
		//Puede crear un nuevo usuario
		$password=$_POST['password'];
		if ($password!=$password) {
			header('Location: ../login.php?er=3');
		}else{
			$sql="INSERT into usuario (userid,email,password,estado)
			VALUES ('','$email','$password',1)";
			$result=mysqli_query($con,$sql);
			$userid=mysqli_insert_id($con);
			session_start();
			$_SESSION['userid']=$userid;
			$_SESSION['email']=$email;
			$_SESSION['fname']='';
			header('Location: ../');
		}
	}else{
		header('Location: ../login.php?er=2');
	}
}else{
	header('Location: ../login.php?er=1');
}