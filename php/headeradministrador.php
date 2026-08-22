<header>
    <div class="container-fluid" style="background-color: rgb(3, 55, 98); color: whitesmoke;">
        <div class="row">
            <div class="col-6">
                <table>
                    <tr>
                        <td>usuario:</td>
                        <td>
                            <?php echo $usuario ?>
                        </td>
                    </tr>
                    <tr>
                        <td>nombre: </td>
                        <td>
                            <?php echo $nombreUsuario ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tipo:</td>
                        <td>
                            <?php echo $tipoUsuario ?>
                        </td>
                    </tr>
                </table>

            </div>

            <div class="col-6" align="right">
                <a href="cerrar.php" class="btn btn-danger" style="margin-right: 40px; margin-top: 15px;">Cerrar</a>

            </div>

        </div>

    </div>
</header>