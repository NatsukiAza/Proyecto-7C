<?php 
  session_start();
  include_once "../modelo/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;700&family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/queries.css">
    <link rel="stylesheet" href="../../css/chat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aromatic - Inicio de Sesion</title>
  </head>

<body>

  <?php include("navbar4.php"); ?>

  <div id="c">
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $userid = mysqli_real_escape_string($conn, $_GET['userid']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$userid}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: usuarios.php");
          }
        ?>
        <a href="usuarios.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="../modelo/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $userid; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Escribe un mensaje aquí ..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>
  </div>

  <?php include("footer4.php"); ?>
  <script src="../js/chat.js"></script>

</body>
</html>
