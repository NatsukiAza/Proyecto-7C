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
	if ($count!=0) {
		$password=$_POST['password'];
		if ($row['password']!=$password) {
			header('Location: ../login.php?e=3');
		}else{
			session_start();
			$_SESSION['userid']=$row['userid'];
			$_SESSION['email']=$row['email'];
			$_SESSION['fname']=$row['fname'];
			header('Location: ../');
		}
	}else{
		header('Location: ../login.php?e=2');
	}
}else{
	header('Location: ../login.php?e=1');
}