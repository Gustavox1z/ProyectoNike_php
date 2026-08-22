<?php

include("conexion.php");

session_start();

$id = NULL;
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$nombre = $_POST['nombre'];
$genero = $_POST['genero'];
$email = $_POST['email'];
$numero = $_POST['telefono'];
$cliente = 1;

$sql = "INSERT INTO clientes VALUES ('$id','$usuario','$password','$nombre','$genero','$email', '$numero','$cliente')";
$query = mysqli_query($con, $sql);
if ($query) {
    Header("Location: sesion.php");

    session_start();

    $_SESSION['mensaje'] = "Te haz registrado correctamente, inicia sesion";
    
} else {
    echo "error al insertar los datos";
}
