<?php

include('conexion.php');

session_start();
$usuario = $_SESSION['usuario'];

$consultaInfo = "SELECT * FROM datosusuarios WHERE usuario='$usuario'";
$resultadoInfo = mysqli_query($con, $consultaInfo);
$registro = mysqli_fetch_array($resultadoInfo);

$consultaVen = "SELECT * FROM ventas";
$resultadoVen = mysqli_query($con, $consultaVen);

$nombreUsuario = $registro[2];
$tipoUsuario = $registro[3];
?>

<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/estilos2.css">
    <link rel="website icon" type="png" href="/proyecto1/img/nike.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NIKE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <?php include("headeradministrador.php"); ?>
    <?php include("bodygestorcompras.php"); ?>
    <?php include("footer.php"); ?>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>