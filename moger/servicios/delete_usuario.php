<?php
	include('_conexion.php');	
	session_start();
	$unique_id=$_SESSION['unique_id'];
	

	$sql= "delete from users where unique_id=$unique_id";
	$result=mysqli_query($con,$sql);