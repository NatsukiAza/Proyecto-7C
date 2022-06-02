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
        window.location.href="login.html";
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
            window.location.href="login.html";
            </script>';
        }
    }
}
  //de aca en adelante es distincion por rol
  if (isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
        case 1: 
            header('location: adminpag.php')
            break;
        case 2: 
            header('location: index.php')
            break;
        default:
    }
}
if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username']
    $password = $_POST['password']
    
    $db = new Database();
    $query = $db->connect()->prepare('SELECT*FROM usuarios WHERE username = :username AND password = :password');
    $query->execute(['username'=> $username, 'password' => $password]);
    
    $row = $query->fetch(PDO::FETCH_NUM);
    if ($row == true){
        //validar rol 
        $rol = $row[3];
        $_SESSION['rol'] = $rol;
        switch($_SESSION['rol']){
            case 1: 
                header('location: adminpag.php')
                break;
            case 2: 
                header('location: index.php')
                break;
            default:
        }
    }
    else{
        //no existe el usuario
        echo "El usuario o contraseña son incorrectos"; 
    }
}
else{
    echo "hasta la vista baby";
}
?>