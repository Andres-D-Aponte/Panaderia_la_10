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
    <title>Panaderia la 10 - Contacto</title>
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
                <h1>CONTACTO</h1>
            </div>
        </div>

        <div class="formulario-contacto centrar">
            <form method="post" class="form">
                <div class="formulario">
                    <div class="titulo-contacto">
                        <h1>CONTACTA CON NOSOTROS</h1>
                        <br>
                        <h3>COMPLETA CON TUS DATOS Y DEJANOS TU MENSAJE PARA CONTACTARNOS</h3>
                        <br>        
                        <h3>+57 301-542-8386</h3>
                        <br>
                    </div>
                    <div class="secciones centrar">
                        <div class="seccion1">
                            <input type="tel" class="form-control" placeholder="Telefono *" name="phone" />                                
                        </div>
                        <div class="seccion2">
                            <input type="text" class="form-control" placeholder="Tu Nombre *" required="required" name="name" />                                
                        </div>
                        <div class="seccion3">
                            <input type="email" class="form-control" placeholder="Tu Email *" required="required" name="email" />
                        </div>
                    </div>
                    <div class="seccion-texto centrar">
                        <textarea required="required" placeholder="Tu Mensaje *" name="mensaje" ></textarea>
                        <input type="submit" class="boton-contacto" name="register">
                    </div>
                </div>
            </form>
        </div>

        <?php
            include("conexion.php");

            if(isset($_POST['register'])){
                if(strlen($_POST['phone']) >= 1 && strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['mensaje']) >= 1){
                    $phone = trim($_POST['phone']);
                    $name = trim($_POST['name']);
                    $email = trim($_POST['email']);
                    $mensaje = trim($_POST['mensaje']);
                    $fechacont = date("d/m/y");
                    $consulta = "INSERT INTO contacto(telefono, nombre, email, mensaje, fecha_contacto) VALUES ('$phone','$name','$email','$mensaje','$fechacont')";
                    $resultado = mysqli_query($conex, $consulta);
                    if ($resultado) {
                        ?> 
                        <h3 class="ok">¡Te has inscripto correctamente!</h3>
                    <?php 
                    } else {
                        ?> 
                        <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                    <?php
                    }
                } else {
                    ?> 
                    <h3 class="bad">¡Por favor complete los campos!</h3>
                    <?php
                }
            }
        ?>

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
    
</body>
<script>
    $(".opciones").click(function(){
        $(".banner-hover").slideToggle();
        $(".logo_mobile").slideToggle();
        $(".banner-logo").slideToggle();
    });
</script>
</html>