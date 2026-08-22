<?php
include 'conexion.php';

$idProducto = $_POST['idProducto'];
$idupdates = $_POST['idupdates'];
$nomArchivo = $_POST['nom'];
$estatus = '0';
$consulta = "UPDATE productos SET estatus = '$estatus' WHERE id = '$idProducto'";

if ($con->query($consulta) === TRUE) {
	echo 'se cambio el estatus';

	$consulta2 = "UPDATE uploads SET estatus = '$estatus' WHERE id = '$idupdates'";

	if ($con->query($consulta2) === TRUE) {
		echo 'se cambio el estatus 2';
		if (unlink('../uploads/' . $nomArchivo)) {
			header("location:gestorcontenido.php");
		} else {
			echo 'no se elimino el archivo';
		}
		//header("location:gestorContenido.php");
	} else {
		echo 'Tienes un error en :' . $con->error;
	}
	//header("location:gestorContenido.php");
} else {
	echo 'Tienes un error en :' . $con->error;
}
// actualizar el estatus de la tabla uploads
?>