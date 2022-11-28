<?php

include("conexion.php");
$con=conectar();

$cod_desayunos=$_GET['id'];

$sql="DELETE FROM desayunos  WHERE cod_desayunos='$cod_desayunos'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: desayunos.php");
    }
?>
