<?php

include("conexion.php");
$con=conectar();

$cod_postres=$_POST['cod_postres'];
$nombre=$_POST['nombre'];
$imagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];

$sql="UPDATE postres SET  nombre='$nombre',imagen='$imagen',descripcion='$descripcion',precio='$precio' WHERE cod_postres='$cod_postres'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: postres.php");
    }
?>