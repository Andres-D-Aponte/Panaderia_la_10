<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php

    include("conexion.php");

    if(isset($_POST['register'])){
        if(strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['phone']) >= 1 && strlen($_POST['date']) >= 1 && strlen($_POST['time']) >= 1 && strlen($_POST['mensaje']) >= 1){
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $phone = trim($_POST['phone']);
            $date = trim($_POST['date']);
            $time = trim($_POST['time']);
            $mensaje = trim($_POST['mensaje']);
            $fechareg = date("d/m/y");
            $consulta = "INSERT INTO datos(nombre, email, telefono, fecha, hora, mensaje, fecha_registro) VALUES ('$name','$email','$phone','$date','$time','$mensaje','$fechareg')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {
                ?> 
                <h3 class="ok">¡Datos Capturados Correctamente!</h3>
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
</body>
</html>

