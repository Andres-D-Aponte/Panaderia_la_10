<?php
include("conexion.php");
$con=conectar();

$cod_cereales=$_POST['cod_cereales'];
$nombre=$_POST['nombre'];
$imagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];


$sql="INSERT INTO cereales VALUES('$cod_cereales','$nombre','$imagen','$descripcion','$precio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cereales.php");
    
}else {
}
?>