<?php

include 'conexion.php';

$consulta = "SELECT * FROM ventas";
$resultado = mysqli_query($con, $consulta);

?>
<div class="container">
    <center>
        <h1 class="display-2">ESTAS SON TUS VENTAS AL DIA DE HOY</h1>

        <?php 
        
        $resultadoCompra = 0;

        while ($row = mysqli_fetch_array($resultado)):

            $resultadoCompra = $resultadoCompra + $row['costo'];
        ?>
        <?php endwhile; ?>

        <p class="h1" style="color: green;">$<?php echo $resultadoCompra; ?>.00</p>

    </center>
</div>
    <table class="table">
        <thead>
            <tr>
                <th class="table-primary">
                    <p class="h5">Id</p>
                </th>
                <th class="table-secondary">
                    <p class="h5">Nombre</p>
                </th>
                <th class="table-success">
                    <p class="h5">Descripcion</p>
                </th>
                <th class="table-danger">
                    <p class="h5">Nombre Cliente</p>
                </th>
                <th class="table-warning">
                    <p class="h5">Correo cliente</p>
                </th>
                <th class="table-info">
                    <p class="h5">Costo
                </th>
            </tr>
        </thead>
        <tbody>
            <?php



            while ($row = mysqli_fetch_array($resultadoVen)): ?>
                <tr>
                    <th class="table-secondary">
                        <p class="h6"><?= $row['id'] ?></p>
                    </th>
                    <th class="table-primary">
                        <p class="h6"><?= $row['nombre'] ?></p>
                    </th>
                    <th class="table-danger">
                        <p class="h6"><?= $row['descripcion'] ?></p>
                    </th>
                    <th class="table-success">
                        <p class="h6"><?= $row['nombreCliente'] ?></p>
                    </th>
                    <th class="table-info">
                        <p class="h6"><?= $row['correoCliente'] ?></p>
                    </th>
                    <th class="table-warning">
                        <p class="h6">$<?= $row['costo'] ?></p>
                    </th>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>