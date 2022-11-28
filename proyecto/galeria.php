<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <!--LETRA PLAYBALL-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&family=Poppins:wght@200&display=swap" rel="stylesheet">
    <!--LETRA FREEHAND-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Freehand&display=swap" rel="stylesheet">
    <!--LETRA Kaushan Script-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <!--LETRA PT Sans-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <!--LETRA Fira Sans-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,200&family=PT+Sans&display=swap" rel="stylesheet">
    <!--/LETRA-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Panaderia la 10 - Galeria</title>
</head>
<body>
    <div class="padre">
        <div class="logo centrar">
            <img src="img/Logo.png" alt="Error al cargar la imagen">
        </div>
        <div class="banner centrar">
            <ul>
                <div class="logo_mobile"><img src="img/Logo.png" alt="Error al cargar la imagen"></div>
                <li class="banner-hover"><a href="index.php">HOME</a></li>
                <li class="banner-hover"><a href="menu.php">MENU</a></li>
                <li class="banner-hover"><a href="contacto.php">CONTACTO</a></li>
                <li class="banner-hover"><a href="galeria.php">GALERIA</a></li>
                <div class="opciones"><img src="img/opciones.png"></div>
            </ul>
        </div>

        <div class="intro_contacto intro_menu">
            <div class="img_contacto img_menu">
                <img src="img/intro-menu.jpg" alt="Error al cargar la imagen">
            </div>
            <div class="titulo_contacto titulo_menu">
                <h1>GALERIA</h1>
            </div>
        </div>

        <div class="galeria">
            <div class="imprimir_fotos">

            </div>
        </div>

        <hr>
        <div class="banner centrar inferior">
            
            <ul>
                <li class="banner-logo"><a href="http://localhost/proyecto/"><img src="img/Logo.png" alt="Error al cargar la imagen"></a></li>
                <li class="banner-hover"><a href="index.php">HOME</a></li>
                <li class="banner-hover"><a href="menu.php">MENU</a></li>
                <li class="banner-hover"><a href="contacto.php">CONTACTO</a></li>
                <li class="banner-hover"><a href="galeria.php">GALERIA</a></li>
                <li class="banner-logo"><a href="http://localhost/proyecto/"><img src="img/panaderia.png" alt="Error al cargar la imagen"></a></li>
            </ul>
        </div>
    </div>

    <!-- JV-->
    <script>
        $(".opciones").click(function(){
            $(".banner-hover").slideToggle();
            $(".logo_mobile").slideToggle();
            $(".banner-logo").slideToggle();
        });

        const fotos = ["g1.jpg", "g2.jpg", "g3.jpg", "g4.jpg", "g5.jpg", "g6.jpg", "g7.jpg", "g8.jpg", "g9.jpg", "g10.jpg", "g11.jpg", "g12.jpg"];

        let galeria = "";
        for (let i = 0; i < fotos.length; i++){
            galeria = galeria + "<div class='imprimir_fotos'><img src='img/galeria/" + fotos[i] + "'></div>";
        }

        $(".galeria").html(galeria);
    </script>
</body>
</html>