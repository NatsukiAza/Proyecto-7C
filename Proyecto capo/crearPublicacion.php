<?php

include('config.php');

$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$stock = $_POST["stock"];
$precio = $_POST["precio"];
$imagenes = $_POST["imagenes"];

$insertar = "INSERT INTO publicaciones (descripcion, nombre, stock, imagenes, precio) VALUES ('$descripcion', '$nombre', '$stock', '$imagenes', '$precio')";

?>