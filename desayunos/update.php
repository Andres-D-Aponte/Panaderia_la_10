<?php

include("conexion.php");
$con=conectar();

$cod_desayunos=$_POST['cod_desayunos'];
$nombre=$_POST['nombre'];
$imagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];

$sql="UPDATE desayunos SET  nombre='$nombre',imagen='$imagen',descripcion='$descripcion',precio='$precio' WHERE cod_desayunos='$cod_desayunos'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: desayunos.php");
    }
?>