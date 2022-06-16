<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/queries.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    
    <header>
        <div class="content">
            <a class="logo" href="#">Aromatic</a>
            <div class="toggler">
                <i class="fa-solid fa-bars"></i>
            </div>
            <nav class="mainnav">
                <ul>
                    <li><a href="#E">Contactos</a></li>
                    <li><a href="#C">Chats</a></li>
                    <li><a href="login-register/login.html">Logueate</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="separador"></div>

    <div class="fotorama"  data-autoplay="true"  data-loop="true"  data-width="100%">
        <img src="https://s.fotorama.io/1.jpg">
        <img src="https://s.fotorama.io/2.jpg">
    </div>  

        <main class="grupos">

            <a href="productos.html" class="grupo">
            <section class="card">
            <div>
                <h2>Perfume</h2>
                <hr>
                <p>Productos de perfumeria</p>
            </div>       
            </section>
            </a>

            <a href="productos.html" class="grupo">
            <section class="card">
            <div>
                <h2>Perfume</h2>
                <hr>
                <p>Productos de perfumeria</p>
            </div>       
            </section>
            </a>

            <a href="productos.html" class="grupo">
            <section class="card">
            <div>
                <h2>Perfume</h2>
                <hr>
                <p>Productos de perfumeria</p>
            </div>       
            </section>
            </a>
        
        </main>
        <script>
            $(function(){
                $(".toggler").click(function(){
                    $(".mainnav").slideToggle(700);
                })
            })
        </script>
</body>
</html>
