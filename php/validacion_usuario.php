<?php

include('conexion.php');

session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password' AND status = '1'";

$resultado = mysqli_query($con, $consulta);
$count = mysqli_num_rows($resultado);
$fila = mysqli_fetch_array($resultado);

$usuarioCon = $fila[1];

if ($count == 1) {

    $_SESSION['usuario'] = $usuarioCon;
    header("location: administrador.php");
} else {

    $consulta1 = "SELECT * FROM clientes WHERE usuario = '$usuario' AND password = '$password' and cliente='1'";
    $resultado1 = mysqli_query($con, $consulta1);
    $count1 = mysqli_num_rows($resultado1);
    $fila1 = mysqli_fetch_array($resultado1);

    $usuarioCon1 = $fila1[1];

    if ($count1 == 1) {
        $_SESSION['usuario'] = $usuarioCon1;
        header("location: index2.php");
    } else {
        header("location: error.php");
    }
}

