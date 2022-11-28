<?php

include("conexion.php");
$con=conectar();

$cod_cereales=$_POST['cod_cereales'];
$nombre=$_POST['nombre'];
$imagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];

$sql="UPDATE cereales SET  nombre='$nombre',imagen='$imagen',descripcion='$descripcion',precio='$precio' WHERE cod_cereales='$cod_cereales'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cereales.php");
    }
?>