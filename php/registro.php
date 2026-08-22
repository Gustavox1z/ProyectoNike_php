<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="/proyecto1/css/estilos2.css">
  <link rel="website icon" type="png" href="/proyecto1/img/nike.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NIKE</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="simple-linear2">
  <div class="position-absolute top-50 start-50 translate-middle headline">
    <center>
      <p class="h1">REGISTRO</p>
    </center>
    <a href="index.php"><img src="/proyecto1/img/nike.png" alt="" width="50px"></a>
    <a href="index.php"><img src="/proyecto1/img/jordan.png" alt="" width="35px" style="margin-left: 20px; margin-bottom: 15px;"></a>
    <form action="insertar_usuarios.php" method="POST" class="row g-3 needs-validation" novalidate>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nombre</label>
        <input name="nombre" type="text" class="form-control" id="validationCustom01" required>
        <div class="invalid-feedback">
          Por favor ingresa tu nombre.
        </div>
        <div class="valid-feedback">
          Correcto!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Usuario</label>
        <input name="usuario" type="text" class="form-control" id="validationCustom02" required>
        <div class="invalid-feedback">
          Por favor ingresa tu usuario.
        </div>
        <div class="valid-feedback">
          Correcto!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Email</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
          <input name="email" type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Por favor ingresa tu correo electronico.
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <label for="validationCustom04" class="form-label">Genero</label>
        <select name="genero" class="form-select" id="validationCustom04" required>
          <option selected disabled value="">Seleccionar</option>
          <option value="hombre">Masculino</option>
          <option value="mujer">Femenino</option>
          <option value="no se sabe">Prefiero no decirlo</option>
        </select>
        <div class="valid-feedback">
          Correcto!
        </div>
        <div class="invalid-feedback">
          por favor ingresa tu genero
        </div>
      </div>
      <div class="col-md-3">
        <label for="validationCustom05" class="form-label">Contraseña</label>
        <input name="password" type="password" class="form-control" id="validationCustom05" required>
        <div class="valid-feedback">
          Correcto!
        </div>
        <div class="invalid-feedback">
          Por favor ingresa tu contraseña.
        </div>
      </div>
      <div class="col-md-3">
        <label for="validationCustom05" class="form-label">Telefono</label>
        <input name="telefono" type="text" class="form-control" id="validationCustom05" required>
        <div class="valid-feedback">
          Correcto!
        </div>
        <div class="invalid-feedback">
          Por favor ingresa tu numero telefonico.
        </div>
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
          <label class="form-check-label" for="invalidCheck">
            Acepto los terminos y condiciones
          </label>
          <div class="invalid-feedback">
            Tienes que aceptar para registrarte.
          </div>
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary btn-lg" type="submit">ingresar</button>
        <a href="cerrar.php" class="btn btn-danger btn-lg" style="margin-left: 10px;">Regresar</a>
      </div>
    </form>
  </div>

  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
    })()
  </script>
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