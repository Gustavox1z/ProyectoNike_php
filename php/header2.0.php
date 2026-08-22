<header>
  <nav class="navbar navbar-expand-lg" style="background-color: #96C2DB; margin-bottom: -7px; margin-top: -7px;">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="/proyecto1/img/jordan.png" alt="" width="35px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div>
        <div>
         <a class="sesiones" href="cerrar.php">CERRAR SESION</a> | <a class="sesiones" href="">AYUDA</a>              |
        <a class="sesiones fondo" href="perfil.php">
         Hola, <?php echo $usuario; ?> ! <img src="../img/usuario.png" alt="usuario" width="25px" style="margin-right: 3px; margin-bottom: 5px"></a>
      </div>
    </div>
  </nav>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="/proyecto1/img/nike.png" alt="" width="40px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="compras.php?tipo=">Productos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Mas
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="compras.php?tipo=Niños">Niños</a></li>
              <li><a class="dropdown-item" href="compras.php?tipo=Hombres">Hombres</a></li>
              <li><a class="dropdown-item" href="compras.php?tipo=Mujeres">Mujeres</a></li>
              <li><a class="dropdown-item" href="compras.php?tipo=Calzado">calzado</a></li>
              <li><a class="dropdown-item" href="compras.php?tipo=Gorras">Gorras</a></li>
              <li><a class="dropdown-item" href="compras.php?tipo=Mochilas">Mochilas</a></li>
              <li><a class="dropdown-item" href="compras.php?tipo=Bolsos">Bolsos</a></li>
              <li><a class="dropdown-item" href="compras.php?tipo=Calcetines">Calcetines</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Acerca de</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>