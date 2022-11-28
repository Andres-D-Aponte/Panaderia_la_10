<?php
include("conexion.php");
$con=conectar();

$cod_torta=$_POST['cod_torta'];
$nombre=$_POST['nombre'];
$imagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];


$sql="INSERT INTO tortas VALUES('$cod_torta','$nombre','$imagen','$descripcion','$precio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: tortas.php");
    
}else {
}
?>