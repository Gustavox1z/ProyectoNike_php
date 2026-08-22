<?php

include('conexion.php');

session_start();
$usuario = $_SESSION['usuario'];

$consultaInfo = "SELECT * FROM datosusuarios WHERE usuario='$usuario'";
$resultadoInfo = mysqli_query($con, $consultaInfo);
$registro = mysqli_fetch_array($resultadoInfo);
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
    <div>
        <center>
    <a href="../jose angel tarea 2/ejemplo3.html">Enlace 1</a><br>
    <a href="../jose angel/index.html">Enlace 2</a><br>
    <a href="../jose angel tarea 2/jose angel tarea/ejemplo2.html">Enlace 3</a><br>
    <a href="../jose angel tarea 2/jose enagel/documento.html">Enlace 4</a><br>
    <a href="../jose angel/reporte.pdf">reporte 1 shop factory</a><br>
    <a href="../jose angel/reporte 2.pdf">reporte 2 shop factory</a><br>
    <a href="../jose angel/reporte 3.pdf">reporte 3 shop factory</a><br>
    <a href="../jose angel/reporte 4.pdf">reporte 4 shop factory</a><br>
    </center>
    </div>
    <?php include("footer.php"); ?>

</body>

<style>
    a{
        font-size: 50px;
        color: black;
        text-decoration: none;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>