<?php
	include("../config/conexion.php");
	$response=new stdClass();

	$codpro=$_POST['codpro'];
	$prodst=$_POST['prodst'];
	$sql="select * from producto where codpro=$codpro and where $prodst=<20";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	$obj=new stdClass();
	$obj->nompro=utf8_encode($row['nompro']);
	$obj->despro=utf8_encode($row['despro']);
	$obj->prepro=$row['prepro'];
	$obj->estado=$row['estado'];
	$obj->rutimapro=$row['rutimapro'];
	$obj->prodst=$row['prodst'];
	$response->product=$obj;

	echo json_encode($response);