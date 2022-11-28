<?php

include("conexion.php");
$con=conectar();

$cod_torta=$_POST['cod_torta'];
$nombre=$_POST['nombre'];
$imagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];

$sql="UPDATE tortas SET  nombre='$nombre',imagen='$imagen',descripcion='$descripcion',precio='$precio' WHERE cod_torta='$cod_torta'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: tortas.php");
    }
?>