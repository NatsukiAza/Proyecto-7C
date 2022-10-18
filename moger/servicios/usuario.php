<?php
include('../_conexion.php');
$unique_id=$_SESSION['unique_id'];
$response=new stdClass();

//$datos=array();
$datos=[];
$i=0;
$text=$_POST['text'];

$sql="SELECT * from users where unique_id=$unique_id;
$result=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($result)){
	$obj=new stdClass();
	$obj->user_id=$row['user_id'];
	$obj->unique_id=$row['unique_id'];
	$obj->fname=$row['fname'];
	$obj->lname=$row['lname'];
	$obj->email=$row['email'];
	$obj->img=$row['img'];
	$obj->staus=$row['status'];
	$datos[$i]=$obj;
	$i++;
}*/
$response->datos=$datos;

mysqli_close($con);
header('Content-Type: application/json');
echo json_encode($response);
