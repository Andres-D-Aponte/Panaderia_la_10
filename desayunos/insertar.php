<?php
include("conexion.php");
$con=conectar();

$cod_desayunos=$_POST['cod_desayunos'];
$nombre=$_POST['nombre'];
$imagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];


$sql="INSERT INTO desayunos VALUES('$cod_desayunos','$nombre','$imagen','$descripcion','$precio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: desayunos.php");
    
}else {
}
?>