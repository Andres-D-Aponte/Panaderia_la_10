<?php
include("conexion.php");
$con=conectar();

$cod_panes=$_POST['cod_panes'];
$nombre=$_POST['nombre'];
$imagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];


$sql="INSERT INTO panes VALUES('$cod_panes','$nombre','$imagen','$descripcion','$precio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: panes.php");
    
}else {
}
?>