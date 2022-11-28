<?php
include("conexion.php");
$con=conectar();

$cod_postres=$_POST['cod_postres'];
$nombre=$_POST['nombre'];
$imagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];


$sql="INSERT INTO postres VALUES('$cod_postres','$nombre','$imagen','$descripcion','$precio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: postres.php");
    
}else {
}
?>