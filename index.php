<?php
	session_start();
?>

<!doctype html>
<html lang="es">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/queries.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

  <?php include("navbar.php"); ?>

      <div style="width: 100%;" class="port">
        <img width="100%" src="img/pagini4.jpg" alt="Portada">
      </div>

      <div class="tf">
        <h1>Encontra Tu Fragancia Ideal</h1>
        <h2>Perfumes, Fragancias, Aromatizantes y mas</h2>
        <a href="">MIRA NUESTRO CATALOGO</a>
      </div>

      <div class="masv">
        <h1>Podria interesarte...</h1>
        <div class="productos">
          <button type="button" id="fi"><</button>
          <button type="button" id="fd">></button>

        <a href="#" class="prod">
          <img width="100%" src="img/sahumerio.jpg" alt="sahumerio">
          <h1>Producto 1</h1>
          <h2>$125</h2>
        </a>
        <a href="#" class="prod">
          <img width="100%" src="img/sahumerio.jpg" alt="sahumerio">
          <h1>Producto 2</h1>
          <h2>$250</h2>
        </a>
        <a href="#" class="prod">
          <img width="100%" src="img/sahumerio.jpg" alt="sahumerio">
          <h1>Producto 3</h1>
          <h2>$500</h2>
        </a>

        <a class="mm" href="#">MIRA OTROS PRODUCTOS ASI</a>

        </div>
      </div>

  <div style="margin-top: 60%;">

      <h2 class="titulo">¡Bienvenido a Aromatic!</h2>
      <p class="subt">El aroma te transporta a lugares lejanos, a los seres queridos y amados,  a momentos especiales guardados en gratos recuerdos.
        Se necesita sólo un instante para que todo lo que te rodea se vuelva encantador.</p>


    <div class="backg"></div> 
    <div class="cgrup">
    <div class="circulo" id="ciz"></div>
    <div class="imag2"><img src="img/fragancia.png" width="100%"></div> 
    </div>
    <div class="card" id="izq" style="width: 18rem;">
      <div class="card-body">
        <h1 class="card-title fw-bolder">Fragancias</h1>
        <h5 class="card-subtitle mb-2 fw-bold">Mira algunas de nuestras mejores fragancias</h5>
        <hr>
        <p id="espacio" class="card-text fw-lighter">Amour Fresa <a href="productos.html">Comprar</a></p>
        <hr>
        <p id="espacio" class="card-text fw-lighter">Amour Fresa <a href="productos.html">Comprar</a></p>
        <hr>
        <p id="espacio" class="card-text fw-lighter">Amour Fresa <a href="productos.html">Comprar</a></p>
        <hr>
        <p id="espacio" class="card-text fw-lighter">Amour Fresa <a href="productos.html">Comprar</a></p>
        <hr>
        <a href="#" class="card-link">Ver difusores</a>
        <a href="#" class="card-link">Ver aromas </a>
      </div>
    </div>

    <div class="cgrup">
    <div class="imag1"><img src="img/difusor.png" width="100%"></div> 
    <div class="circulo" id="cde"></div>
    </div>
    <div class="card" id="der" style="width: 18rem;">
      <div class="card-body">
        <h1 class="card-title fw-bolder">Difusores</h1>
        <h5 class="card-subtitle mb-2 fw-bold">Busca el difusor que mejor se ajuste a vos</h5>
        <hr>
        <p id="espacio" class="card-text fw-lighter">Amour Fresa <a href="productos.html">Comprar</a></p>
        <hr>
        <p id="espacio" class="card-text fw-lighter">Amour Fresa <a href="productos.html">Comprar</a></p>
        <hr>
        <p id="espacio" class="card-text fw-lighter">Amour Fresa <a href="productos.html">Comprar</a></p>
        <hr>
        <p id="espacio" class="card-text fw-lighter">Amour Fresa <a href="productos.html">Comprar</a></p>
        <hr>
        <a href="#" class="card-link">Ver difusores</a>
        <a href="#" class="card-link">Ver aromas </a>
      </div>
    </div>

    <a class="bt" href="moger/index.php">¡Empeza a mirar nuestros productos ahora!</a>

    <div style="margin-top: 30%;"> </div>
    <footer style="text-align: center;" class="info">
      <p class="licencia">El contenido esta disponible bajo la licencia de Gragus Corp a menos que se indique lo contrario</p>
      <section class="buttons">
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
    </section>
      <p style="margin-bottom: 0;">+54 9 11 5506 8746</p>
    </footer>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>