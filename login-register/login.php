<?php

include('config.php'); 
session_start(); 

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $consulta = $conn->prepare("SELECT * FROM login WHERE username =:usuario");
    $consulta->bindParam("usuario", $username, PDO::PARAM_STR); 
    $consulta ->execute();

    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

    if(!$resultado){
        echo'<script type="text/javascript">
        alert("La contraseña y/o el usuario no son correctos");
        window.location.href="crearcuentaUsuario.html";
        </script>';
    }
    else{

        if(password_verify($password,$resultado['password'])){ 
            $_SESSION['IdUsuario'] = $resultado['ID'];
            $_SESSION['user'] = $username;
           header("Location: index.html"); 
        }
        else{
            echo'<script type="text/javascript">
            alert("Usuario y contraseña son erroneos");
            window.location.href="crearcuentaUsuario.html";
            </script>';
        }
    }
}
else{
    echo "hasta la vista baby";
}
?>