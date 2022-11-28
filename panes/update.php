<?php

include("conexion.php");
$con=conectar();

$cod_panes=$_POST['cod_panes'];
$nombre=$_POST['nombre'];
$imagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];

$sql="UPDATE panes SET  nombre='$nombre',imagen='$imagen',descripcion='$descripcion',precio='$precio' WHERE cod_panes='$cod_panes'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: panes.php");
    }
?>