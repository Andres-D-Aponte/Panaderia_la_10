<?php

include("conexion.php");
$con=conectar();

$cod_postres=$_GET['id'];

$sql="DELETE FROM postres  WHERE cod_postres='$cod_postres'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: postres.php");
    }
?>
