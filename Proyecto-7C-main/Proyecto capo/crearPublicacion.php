<?php

include('config.php');

$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$stock = $_POST["stock"];
$precio = $_POST["precio"];
$imagenes = $_POST["imagenes"];

$insertar = "INSERT INTO publicaciones (descripcion, nombre, stock, imagenes, precio) VALUES ('$descripcion', '$nombre', '$stock', '$imagenes', '$precio')";

$resultado = mysqli_query($coneccion, $insertar);
if($resultado)
{
    echo "<script>alert('La publicacion se creo con exito');
    window.location='/Tabla-datos-grid'</script>";
}
else 
{
   echo "<script>('No se pudo crear la publicacion'); window.history.go(-1);</script>";
}

?>