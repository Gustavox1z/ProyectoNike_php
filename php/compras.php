<?php

$nomTipo = $_REQUEST['tipo']; // nomTipo es igual a compras

?>

<!doctype html>
<html lang="es">
<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        ScrollReveal({ reset: true });
    </script>
</head>
<head>
  <link rel="website icon" type="png" href="/proyecto1/img/nike.png">
  <!-- Required meta tags -->
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <style type="text/css">
    footer {
      background-color: black;
      color: white;
    }

    .clase1 {}

    #claseb {
      background-color: rgb(33, 183, 224);

    }

    #tituloP {
      color: white;
      font-weight: bold;
      margin-top: 30px;
      margin-left: -300px;

    }

    #tituloPB {
      color: white;
      font-weight: bold;
      font-size: 3em;
    }
  </style>

  <link rel="stylesheet" type="text/css" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/estilos2.css">

  <title>Productos</title>
</head>

<body>



  <?php include 'header2.php';  ?>
  <?php include 'bodycompras2.php';  ?>
  <?php include 'footer.php';  ?>

  <script src="btn.js"></script>

  </body>

  <script>
    ScrollReveal().reveal('.headline', { duration: 1000 });
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">

  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>