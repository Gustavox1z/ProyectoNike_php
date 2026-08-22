<div class="container">
	<center>
		<h2>Administrador de contenido</h2>
	</center>
	<div class="panel panel-primary">
		<div class="panel heading">
			<center>
				<h3 class="panel-title"> Cargar Archivos</h3>
			</center>
		</div>
		<div class="panel-body">

			<div class="col-lg-12">
				<div class="file_upload">
					<form action="file_upload.php" class="dropzone" method="POST">

						<div class="dm-message needsclick" style="height: 50px;" align="center">
							<strong>
								Arrastra tus archivos a cualquier lugar para subirlos
							</strong>
							<span class="note needsclick">
								<span class="glyphicon glyphicon-open" aria-hidden="true" style="font-size: 60px;"></span>
							</span>
						</div>
					</form>
				</div>
			</div>

			<div class="col-12">
				<a href="gestorContenido.php" class="btn btn-success">Cargar Archivos</a>
			</div>
		</div>

	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-12" align="center">
			<h3>Mis Productos</h3>
			<hr>
			<hr>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<?php
		$consultaPro = "SELECT * FROM uploads WHERE estatus ='1'";
		$resultadoPro = mysqli_query($con, $consultaPro);
		while ($registro = mysqli_fetch_array($resultadoPro)) {
			$idupdates = $registro[0];
			$direccion = $registro[3];
			$nomArchivo = $registro[1];

			$consultaDesPro = "SELECT * FROM productos WHERE idproducto = '$nomArchivo'";
			$resultadoDesPro = mysqli_query($con, $consultaDesPro);
			$registroDes = mysqli_fetch_array($resultadoDesPro);

			$idProducto = $registroDes[0];
			$nombreP = $registroDes[2];
			$desc = $registroDes[3];
			$costo = $registroDes[4];
			$tipo = $registroDes[6];

		?>

			<div class="col-3 headline" align="center">

				<img src="<?php echo $direccion ?>" width="80%" height="70%">

				<hr>
				<b><?php echo $nombreP ?></b><br>
				<b style="color: green;">$<?php echo $costo ?>.00</b><br>
				<img src="/proyecto1/img/icono2.png" width="30px;" data-target="#eliminar<?php echo $idProducto ?>" data-toggle='modal'>
				<img src="/proyecto1/img/icono1.png" width="30px;" data-target="#formulario<?php echo $idProducto

																							?>" data-toggle='modal'>

				<div class="modal fade" id="eliminar<?php echo $idProducto ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Eliminar elemento</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="eliminarProducto.php" method="POST">
									<input type="text" name="idProducto" value="<?php echo $idProducto ?>" style="display: none;">
									<input type="text" name="idupdates" value="<?php echo $idupdates ?>" style="display: none;">
									<input type="text" name="nom" value="<?php echo $nomArchivo ?>" style="display: none;">


									¿Estas seguro de eliminar este elemento <?php echo $nombreP ?>?
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
								<input type="submit" value="Si" class="btn btn-primary">
								</form>
							</div>
						</div>
					</div>
				</div>



				<div class="modal fade" id="formulario<?php echo $idProducto ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Editar información</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="actualizarinformacion.php" method="POST">
									<input type="text" name="idProducto" value="<?php echo $idProducto ?>" style="display: none;">
									<input placeholder="Ingresa el nombre del producto" style="margin-bottom: 10px;" class="form-control" type="text" name="nombre" value="<?php echo $nombreP ?>">
									<input placeholder="Ingresa la descripción del producto" style="margin-bottom: 10px;" class="form-control" type="text" name="descripcion" value="<?php echo $desc ?>">
									<input placeholder="Costo del producto $000" class="form-control" style="margin-bottom: 10px;" type="text" name="costo" value="<?php echo $costo ?>">
									<select name="tipo" class="form-control">

										<option value="<?php echo $tipo ?>"><?php echo $tipo ?></option>
										<option value="Niños">niños</option>
										<option value="Hombres">Hombres</option>
										<option value="Mujeres">Mujeres</option>
										<option value="Calzado">Calzado</option>
										<option value="Gorras">Gorras</option>
										<option value="Mochilas">Mochilas</option>
										<option value="Bolsos">Bolsos</option>
										<option value="Calcetines">Calcetines</option>

									</select>


							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
								<input type="submit" value="Si" class="btn btn-primary">
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>

		<?php } ?>
	</div>
</div>