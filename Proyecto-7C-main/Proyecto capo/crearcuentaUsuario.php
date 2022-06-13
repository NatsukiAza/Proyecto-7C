<?php 

include('config.php');
if(isset($_POST['crearcuenta'])){

   $username = $_POST['username'];
   $password = $_POST['password'];
   $passwordCifrada = password_hash($password,PASSWORD_DEFAULT);
   $consultaUser = $conn -> prepare("SELECT * FROM login WHERE username= :user");
   $consultaUser -> bindParam("user",$username,PDO::PARAM_STR);
   $consultaUser -> execute();
   $resultadoUser = $consultaUser->fetch(PDO::FETCH_ASSOC);
   if($resultadoUser){ 

       echo'<script type="text/javascript">

       alert("Este usuario ya esta en uso");
       window.location.href="login.html";
       </script>';
   }

   else{

       $consultacrearcuenta = $conn -> prepare("INSERT INTO login(username, password) VALUES (:usuario , :password)");
       $consultacrearcuenta -> bindParam("usuario",$username,PDO::PARAM_STR);
       $consultacrearcuenta -> bindParam("password",$passwordCifrada,PDO::PARAM_STR);
       $resultadocrearcuenta = $consultacrearcuenta -> execute();
       if($resultadocrearcuenta){ 

        echo'<script type="text/javascript">

        alert("Usuario registrado!");
        window.location.href="index.html";
        </script>';
       }

       else{
        
        echo'<script type="text/javascript">

        alert("sucedio un error inesperado durante la creacion de usuario  |ö| ");
        window.location.href="index.html";
        </script>';
       }

   }

}
else{
    echo 'iuan';
}

?>



