<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: usuarios.php");
  }
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Montserrat&family=Oswald:wght@400;700&family=Quicksand:wght@300;400;500;700&family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/queries.css">
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aromatic - Inicio de Sesion</title>
  </head>
<body>

  <p>Adquirí los productos desde la comodidad de tu hogar y aromatiza todos tus espacios con las mejores fragancias.</p>

  <div class="c">
  <div class="wrapper" id="cajal">
    <section class="form signup" id="flex">
    <a class="volver" href="../../index.php"><img width="100%"src="../../img/flecha.png" alt="Volver"></a>
    <div class="cambiar">
    <a href="login.php">Inicia Sesion</a>
    <h1>o</h1>
    <a class="current" href="index.php">Registrate</a>
    </div>

      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off" id="flex" style="flex-direction: column;">
        <div class="error-text" id="error"></div>
        <div class="field input" id="datos">
          <label>NOMBRE</label>
          <input type="text" name="fname" placeholder="Ingresa tu nombre" required>
          <label>APELLIDO</label>
          <input type="text" name="lname" placeholder="Ingresa tu apellido" required>
          <label>E-MAIL</label>
          <input type="text" name="email" placeholder="Ingresa un correo electrónico" required>
          <label>CONTRASEÑA</label>
          <input type="password" name="password" placeholder="Ingresa una contraseña" required>
        </div>

        <div class="field image" id="foto">
        <label>
          <img width="100%" src="../../img/camera.png" alt="Foto">
        </label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" require>
        </div>

        <div class="field button" id="b">
          <input type="submit" name="submit" value="Registrate">
          <a href="login.php">Ya estas registrado?</a>
        </div>
      </form>

    </section>
  </div>
  </div>

  <script src="../js/pass-show-hide.js"></script>
  <script src="../js/signup.js"></script>

</body>
</html>

