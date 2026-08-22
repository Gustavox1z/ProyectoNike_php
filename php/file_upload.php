<?php
session_start();
include 'conexion.php';
$usuario = $_SESSION['usuario'];
$consulta = "SELECT * FROM datosusuarios WHERE usuario = '$usuario'";
$resultadoInfo = mysqli_query($con, $consulta);
$fila = mysqli_fetch_array($resultadoInfo);
$tipoUsuario = $fila[3];
$random = $random_number = intval("0" . rand(1, 9) . rand(1, 9) . rand(1, 9) . rand(1, 9) . rand(1, 9));
$fileTipo = $_FILES['file']['type'];
switch ($fileTipo) {

	case 'image/jpeg':
		$tipo = '.jpeg';
		break;

	case 'image/jpg':
		$tipo = '.jpg';
		break;

	case 'image/png':
		$tipo = '.png';
		break;

	default:
		$tipo = 'Archivo no Aceptado';
		break;
}

$fileName = 'archivo' . $random . $tipo;

if (!empty($_FILES)) {



	$upload_dir = '../uploads/';

	$upload_dir2 = "../uploads/";

	$uploaded_file = $upload_dir . $fileName;
	$uploaded_file2 = $upload_dir2 . $fileName;
	$estatus = 1;
	$hora = date("Y-m-d H:i:s");
	if (move_uploaded_file($_FILES['file']['tmp_name'], $uploaded_file)) {

		$consultaImagen = "INSERT INTO uploads (file_name, upload_time, ruta, rutaad, estatus) VALUES ('$fileName','$hora','$uploaded_file','$uploaded_file2','$estatus')";
		mysqli_query($con, $consultaImagen);

		$consultaImagen2 = "INSERT INTO productos (idproducto, estatus) VALUES ('$fileName','$estatus')";
		mysqli_query($con, $consultaImagen2);
	}
}
?>