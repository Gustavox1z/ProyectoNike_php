<?php
include 'conexion.php';
switch ($nomTipo) {

    case 'Niños':
        // code...206, 206, 24
        $colorL = '0,0,0';
        $parrafo = 'Te mostramos todos los productos para niños que tenemos';
        $consultaDesPro = "SELECT * FROM productos WHERE estatus = '1' AND tipo = 'Niños'";
        break;

    case 'Hombres':
        // code...206, 206, 24
        $colorL = '0,0,0';
        $parrafo = 'Te mostramos todos los productos para hombres que tenemos';
        $consultaDesPro = "SELECT * FROM productos WHERE estatus = '1' AND tipo = 'Hombres'";
        break;

    case 'Mujeres':
        // code...206, 206, 24
        $colorL = '0,0,0';
        $parrafo = 'Te mostramos todos los productos para mujeres que tenemos';
        $consultaDesPro = "SELECT * FROM productos WHERE estatus = '1' AND tipo = 'Mujeres'";
        break;

    case 'Calzado':
        // code...206, 206, 24
        $colorL = '0,0,0';
        $parrafo = 'Te mostramos todos los calzados que tenemos';
        $consultaDesPro = "SELECT * FROM productos WHERE estatus = '1' AND tipo = 'Calzado'";
        break;

    case 'Gorras':
        // code...206, 206, 24
        $colorL = '0,0,0';
        $parrafo = 'Te mostramos todas las gorras que tenemos';
        $consultaDesPro = "SELECT * FROM productos WHERE estatus = '1' AND tipo = 'Gorras'";
        break;

    case 'Mochilas':
        // code...206, 206, 24
        $colorL = '0,0,0';
        $parrafo = 'Te mostramos todas las mochilas que tenemos';
        $consultaDesPro = "SELECT * FROM productos WHERE estatus = '1' AND tipo = 'Mochilas'";
        break;

    case 'Bolsos':
        // code...206, 206, 24
        $colorL = '0,0,0';
        $parrafo = 'Te mostramos todos los bolsos que tenemos';
        $consultaDesPro = "SELECT * FROM productos WHERE estatus = '1' AND tipo = 'Bolsos'";
        break;

    case 'Calcetines':
        // code...206, 206, 24
        $colorL = '0,0,0';
        $parrafo = 'Te mostramos todos los calcetines que tenemos';
        $consultaDesPro = "SELECT * FROM productos WHERE estatus = '1' AND tipo = 'Calcetines'";
        break;



    default:
        // code... 225, 9, 71 

        $colorL = '0,0,0';
        $parrafo = 'Te mostramos todos nuestros productos';
        $consultaDesPro = "SELECT * FROM productos WHERE estatus = '1' ";

        break;
}

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12" align="center">
            <p style="font-size: 2.3em; color: rgb(<?php echo $colorL; ?>) ;"><?php echo $parrafo; ?> </p>
        </div>

    </div>

</div>


<center>
    <div class="container-fluid">
        <div class="row">
            <?php

            $resultadoDesPro = mysqli_query($con, $consultaDesPro);
            while ($registroDes = mysqli_fetch_array($resultadoDesPro)) {
                $id = $registroDes[0];
                $idProducto = $registroDes[1];
                $nombreP = $registroDes[2];
                $desc = $registroDes[3];
                $costo = $registroDes[4];

                $consultaPro = "SELECT * FROM uploads WHERE file_name = '$idProducto'";
                $resultadoPro = mysqli_query($con, $consultaPro);
                $registro = mysqli_fetch_array($resultadoPro);
                $direccion = $registro[3];
            ?>
                <div class="col-3 headline">
                    <div class="card" style="width: 18rem; margin-bottom: 20px;">
                        <img src="<?php echo $direccion; ?>" class="card-img-top" style="height: 380px;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $nombreP; ?></h5>
                            <p class="card-text"><?php echo $desc; ?><br><br>
                                <b style="color: green;">$<?php echo $costo; ?>.00</b>
                            </p>
                            <a onclick="btn_alert()" class="btn btn-primary">Comprar Ahora</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <script>
        function btn_alert() {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Tienes que registrarte primero!",
                footer: '<a href="registro.php">Presiona aqui para registrarte</a>'
            })

        };
    </script>
</center>