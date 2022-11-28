<?php
function conectar(){
    $host="localhost";
    $user="id19818758_root";
    $pass="Adavidaponte10#";

    $bd="id19818758_panaderia_la_10";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
