<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "panaderia_la_10";
?>

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
    <title>Panaderia la 10 - Menú</title>
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

        <div class="intro_menu">
            <div class="img_menu">
                <img src="img/intro-menu.jpg" alt="Error al cargar la imagen">
            </div>
            <div class="titulo_menu">
                <h1>MENÚ</h1>
            </div>
        </div>

        <div class="opc_categorias">
            <h1>CATEGORIAS</h1>
            <div class="categorias">
                <!--
                    <a href="http://localhost/proyecto/">
                    <div class="clientes contenedor azul">
                        <img src="img/cliente.png" alt="Error al cargar la imagen">
                        <h4>Cliente</h4>
                    </div>
                    </a>
                -->
                <div class="cereales contenedor celeste">
                    <img src="img/cereal.png" alt="Error al cargar la imagen">
                    <h4>Cereal</h4>
                </div>

                <div class="panes contenedor cafe">
                    <img src="img/panes.png" alt="Error al cargar la imagen">
                    <h4>Panes</h4>
                </div>

                <div class="desayunos contenedor amarillo">
                    <img src="img/desayuno.png" alt="Error al cargar la imagen">
                    <h4>Desayunos</h4>
                </div>
                
                <div class="postres contenedor marron">
                    <img src="img/postres..png" alt="Error al cargar la imagen">
                    <h4>Postres</h4>
                </div>
                
                <div class="tortas contenedor rosa">
                    <img src="img/torta.png" alt="Error al cargar la imagen">
                    <h4>Tortas</h4>
                </div>
            </div>
            <br><br>
        </div>

        <div class="productos">
            <div class="titulo_productos color_letra">
                <h1>TODOS LOS PRODUCTOS</h1>
            </div>

            <!---- CEREALES ---->
            <div class="productos_cereales">
                <?php
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }
    
                    $sql = "SELECT * FROM cereales";
                    $result = $conn->query($sql);
    
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        echo "<div class='producto_tabla'>
                        <div class='nombre_producto'><h3>".$row["nombre"]."</h3></div>
                        <br>
                        <div class='img_producto'><img src='".$row["imagen"]."'></div>
                        <br>
                        <div class='descripcion_producto'><p>".$row["descripcion"]."</p></div>
                        <br>
                        <div class='seccion_opciones'>
                        <div class='boton_volver'><img src='img/cancelar.jpg' onclick='cerrar()'></div>
                        <div ='precio'><h2>$".$row["precio"]."</h2></div>
                        <div class='boton_comprar'><img src='img/aceptar.jpg' onclick='cerrar()'></div>
                        </div>
                        <br>
                        </div>";
                        
                      }
                    } else {
                      echo "0 results";
                    }
                    $conn->close();
                ?>
            </div>
            
            <!---- DESAYUNOS ---->
            <div class="productos_desayunos">
                <?php
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }
    
                    $sql = "SELECT * FROM desayunos";
                    $result = $conn->query($sql);
    
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        echo "<div class='producto_tabla'>
                        <div class='nombre_producto'><h3>".$row["nombre"]."</h3></div>
                        <br>
                        <div class='img_producto'><img src='".$row["imagen"]."'></div>
                        <br>
                        <div class='descripcion_producto'><p>".$row["descripcion"]."</p></div>
                        <br>
                        <div class='seccion_opciones'>
                        <div class='boton_volver'><img src='img/cancelar.jpg' onclick='cerrar()'></div>
                        <div ='precio'><h2>$".$row["precio"]."</h2></div>
                        <div class='boton_comprar'><img src='img/aceptar.jpg' onclick='cerrar()'></div>
                        </div>
                        <br>
                        </div>";
                        
                      }
                    } else {
                      echo "0 results";
                    }
                    $conn->close();
                ?>
            </div>

            <!---- PANES ---->
            <div class="productos_panes">
                <?php
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }
    
                    $sql = "SELECT * FROM panes";
                    $result = $conn->query($sql);
    
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        echo "<div class='producto_tabla'>
                        <div class='nombre_producto'><h3>".$row["nombre"]."</h3></div>
                        <br>
                        <div class='img_producto'><img src='".$row["imagen"]."'></div>
                        <br>
                        <div class='descripcion_producto'><p>".$row["descripcion"]."</p></div>
                        <br>
                        <div class='seccion_opciones'>
                        <div class='boton_volver'><img src='img/cancelar.jpg' onclick='cerrar()'></div>
                        <div ='precio'><h2>$".$row["precio"]."</h2></div>
                        <div class='boton_comprar'><img src='img/aceptar.jpg' onclick='cerrar()'></div>
                        </div>
                        <br>
                        </div>";
                        
                      }
                    } else {
                      echo "0 results";
                    }
                    $conn->close();
                ?>
            </div>

            <!---- POSTRES ---->
            <div class="productos_postres">
                <?php
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }
    
                    $sql = "SELECT * FROM postres";
                    $result = $conn->query($sql);
    
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        echo "<div class='producto_tabla'>
                        <div class='nombre_producto'><h3>".$row["nombre"]."</h3></div>
                        <br>
                        <div class='img_producto'><img src='".$row["imagen"]."'></div>
                        <br>
                        <div class='descripcion_producto'><p>".$row["descripcion"]."</p></div>
                        <br>
                        <div class='seccion_opciones'>
                        <div class='boton_volver'><img src='img/cancelar.jpg' onclick='cerrar()'></div>
                        <div ='precio'><h2>$".$row["precio"]."</h2></div>
                        <div class='boton_comprar'><img src='img/aceptar.jpg' onclick='cerrar()'></div>
                        </div>
                        <br>
                        </div>";
                        
                      }
                    } else {
                      echo "0 results";
                    }
                    $conn->close();
                ?>
            </div>

            <!---- TORTAS ---->
            <div class="productos_tortas">
                <?php
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }
    
                    $sql = "SELECT * FROM tortas";
                    $result = $conn->query($sql);
    
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        echo "<div class='producto_tabla'>
                        <div class='nombre_producto'><h3>".$row["nombre"]."</h3></div>
                        <br>
                        <div class='img_producto'><img src='".$row["imagen"]."'></div>
                        <br>
                        <div class='descripcion_producto'><p>".$row["descripcion"]."</p></div>
                        <br>
                        <div class='seccion_opciones'>
                        <div class='boton_volver'><img src='img/cancelar.jpg' onclick='cerrar()'></div>
                        <div ='precio'><h2>$".$row["precio"]."</h2></div>
                        <div class='boton_comprar'><img src='img/aceptar.jpg' onclick='cerrar()'></div>
                        </div>
                        <br>
                        </div>";
                        
                      }
                    } else {
                      echo "0 results";
                    }
                    $conn->close();
                ?>
            </div>

            <div class="popup"></div>
        </div>


        <br><br><br><br>
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

    $(".cereales").click(function(){
      $(".productos_tortas").slideToggle();
      $(".productos_postres").slideToggle();
      $(".productos_panes").slideToggle();
      $(".productos_desayunos").slideToggle();
    });

    $(".tortas").click(function(){
      $(".productos_cereales").slideToggle();
      $(".productos_postres").slideToggle();
      $(".productos_panes").slideToggle();
      $(".productos_desayunos").slideToggle();
    });

    $(".postres").click(function(){
      $(".productos_cereales").slideToggle();
      $(".productos_tortas").slideToggle();
      $(".productos_panes").slideToggle();
      $(".productos_desayunos").slideToggle();
    });

    $(".panes").click(function(){
      $(".productos_cereales").slideToggle();
      $(".productos_postres").slideTogglee();
      $(".productos_tortas").slideToggle();
      $(".productos_desayunos").slideToggle();
    });

    $(".desayunos").click(function(){
      $(".productos_cereales").slideToggle();
      $(".productos_postres").slideToggle();
      $(".productos_panes").slideToggle();
      $(".productos_tortas").slideToggle();
    });
</script>
</html>