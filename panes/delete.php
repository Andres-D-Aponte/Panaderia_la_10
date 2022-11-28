<?php

include("conexion.php");
$con=conectar();

$cod_panes=$_GET['id'];

$sql="DELETE FROM panes  WHERE cod_panes='$cod_panes'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: panes.php");
    }
?>
