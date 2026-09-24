<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Icentity - Log In</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/styles.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>

<!-- HEADER -->

<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container">

      <a class="navbar-brand" href="index.php">
        <img class="logo" src="img/logo.png" alt="Logo">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav ms-auto">

          <li class="nav-item">
            <a class="nav-link" href="index.php">HOME</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php#experiencia">ELEGÍ</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="colaboraciones.php">COLABORACIONES</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="nosotros.php">NOSOTROS</a>
          </li>
          <li class="nav-item">
  <a class="nav-link login-icono" href="login.php" aria-label="Iniciar sesión">
    <i class="bi bi-person-fill"></i>
  </a>
</li>

        </ul>
      </div>

    </div>
  </nav>
</header>



<section class="formulario login-formulario">
  <div class="container">

    <h2>INICIÁ SESIÓN</h2>

    <p class="login-subtitulo">
      Ingresá tus datos y formá parte de Icentity.
    </p>

    <form action="enviardatos.php" method="POST">

      <input
        type="text"
        name="nombre"
        placeholder="NOMBRE"
        class="form-control"
        required>

      <input
        type="email"
        name="email"
        placeholder="EMAIL"
        class="form-control"
        required>

      <input
        type="password"
        name="contrasena"
        placeholder="CONTRASEÑA"
        class="form-control"
        required>

      <div class="form-check login-newsletter">
        <input
          class="form-check-input"
          type="checkbox"
          id="newsletter"
          name="newsletter"
          value="true"
          checked>

        <label class="form-check-label" for="newsletter">
          Deseo recibir novedades de Icentity.
        </label>
      </div>

      <button type="submit" class="btn btn-enviar">
        INGRESAR
      </button>

    </form>

  </div>
</section>

<footer class="footer">

  <div class="container footer-info">

    <div class="row text-center align-items-center">

      <div class="col-md-4">
        <h4>SUCURSAL</h4>
        <img src="img/ubicacion.png" alt="Ubicación">
        <p>Av.Siempre Viva 123</p>
      </div>

      <div class="col-md-4 footer-centro">
        <img src="img/logorosa.png" alt="Logo">
        <p style="color: #ff6fb5;">
          HELADOS QUE TE REPRESENTAN
        </p>
      </div>

      <div class="col-md-4">
        <h4>SEGUINOS</h4>
        <img src="img/tiktok.png" alt="TikTok">
        <img src="img/instagram.png" alt="Instagram">
        <p>@icentityoficial</p>
      </div>

    </div>

  </div>

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>