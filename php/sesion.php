<!doctype html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="/proyecto1/css/estilos2.css">
    <link rel="website icon" type="png" href="/proyecto1/img/nike.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NIKE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>


<body class="simple-linear">
    <div class="position-absolute top-50 start-50 translate-middle headline">
        <center>
            <p class="h1">Inicio de sesion</p>
            <?php

            session_start();

            if (isset($_SESSION['mensaje'])) {
                $alerta = $_SESSION['mensaje']; ?>

                <script>
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "<?php echo $alerta; ?>",
                        showConfirmButton: false,
                        timer: 2200
                    });
                </script>

            <?php
                unset($_SESSION['mensaje']);
            } ?>
        </center>
        <form action="validacion_usuario.php" method="POST">
            <a class="navbar-brand" href="index.php"><img src="/proyecto1/img/nike.png" alt="" width="50px"></a>
            <a class="navbar-brand" href="index.php"><img src="/proyecto1/img/jordan.png" alt="" width="35px" style="margin-left: 20px; margin-bottom: 15px;"></a>
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Usuario</label>
            </div>
            <div class="col-auto">
                <input name="usuario" type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" required>
            </div>
            <label for="inputPassword5" class="form-label">Password</label>
            <input name="password" type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required>
            <div id="passwordHelpBlock" class="form-text">
                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
            </div>
            <input type="submit" value="ingresar" class="btn btn-primary btn-lg" style="margin-top: 20px;">
            <a href="cerrar.php" class="btn btn-danger btn-lg" style="margin-left: 10px; margin-top: 20px;">Regresar</a>
        </form>

    </div>


</body>

<script>
    ScrollReveal().reveal('.headline', {
        duration: 2000
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>