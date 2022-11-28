<?php

include("conexion.php");
$con=conectar();

$cod_cereales=$_GET['id'];

$sql="DELETE FROM cereales  WHERE cod_cereales='$cod_cereales'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cereales.php");
    }
?>
