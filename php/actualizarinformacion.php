<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$costo = $_POST['costo'];
$idProducto = $_POST['idProducto'];
$tipo = $_POST['tipo'];


$consulta = "UPDATE productos SET nombre = '$nombre', descripcion = '$descripcion', costo = '$costo', tipo = '$tipo' WHERE id = '$idProducto'";

if ($con->query($consulta) === TRUE) {
	header("location:gestorcontenido.php");
} else {
	echo 'Tienes un error en :' . $con->error;
}
