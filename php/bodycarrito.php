<?php
include 'conexion.php';

$consulta = "SELECT * FROM productos WHERE id = '$id'";
$resultado = mysqli_query($con, $consulta);
$registro = mysqli_fetch_array($resultado);

$id = $registro[0];
$idproducto = $registro[1];
$nombre = $registro[2];
$descripcion = $registro[3];
$costo = $registro[4];

$consulta2 = "SELECT * FROM uploads WHERE file_name = '$idproducto'";
$resultado2 = mysqli_query($con, $consulta2);
$registro2 = mysqli_fetch_array($resultado2);

$direccion = $registro2[3];

?>


<div class="container-fluid">
	<div class="row">
		<div class="col-8" align="center"><img width="600px" src="<?php echo $direccion; ?>"></div>
		<div class="col-4" align="center">
			<h3><?php echo $nombre; ?></h3><br>
			<h4><?php echo $descripcion; ?></h4><br>
			<h1 style="color: green;">$<?php echo $costo; ?>.00</h1><br>
			<form action="guardarCompra.php" method="POST">
				<input style="display:none;" type="text" value="<?php echo $id ?>" name="id">
				<input required class="form-control" type="text" name="nombreCliente" placeholder="Ingresa tu nombre"> <br>
				<input required class="form-control" type="email" name="correoCliente" placeholder="Ingresa tu correo@"><br><br>
				<input type="submit" value="Confirmar Compra" class="btn btn-success">
			</form>
		</div>
	</div>
</div>