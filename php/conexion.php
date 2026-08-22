<?php

$host = "localhost";
$user = "root";
$pass = "";
$bd = "nike";

$con = mysqli_connect($host, $user, $pass, $bd)
    or die("No se pudo conectar a la base de datos: " . mysqli_error($mysql));
?>