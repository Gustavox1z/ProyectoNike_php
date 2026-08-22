<?php
include 'conexion.php';

$id = $_POST['id'];
$nombreCliente = $_POST['nombreCliente'];
$correoCliente = $_POST['correoCliente'];

$consulta = "SELECT * FROM productos WHERE id = '$id'";
$resultado = mysqli_query($con, $consulta);
$registro = mysqli_fetch_array($resultado);


$idnombre = $registro[1];
$nombre = $registro[2];
$descripcion = $registro[3];
$costo = $registro[4];


$consulta2 = "INSERT INTO ventas (idproducto, idnombre, nombre, descripcion, nombreCliente, correoCliente, costo) VALUES('$id','$idnombre','$nombre','$descripcion','$nombreCliente','$correoCliente','$costo')";

if ($con->query($consulta2) === TRUE) {
	header("location: /proyecto1/php/index.php");
} else {
	echo "Error generado es:" . $con->error;
}
