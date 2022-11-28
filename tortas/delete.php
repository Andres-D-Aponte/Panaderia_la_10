<?php

include("conexion.php");
$con=conectar();

$cod_torta=$_GET['id'];

$sql="DELETE FROM tortas  WHERE cod_torta='$cod_torta'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: tortas.php");
    }
?>
