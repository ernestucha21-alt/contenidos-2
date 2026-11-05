<?php
session_start();
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icentity - Resultados de Búsqueda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/styles.css">
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

      <div class="d-flex align-items-center gap-3">

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
      <?php if (isset($_SESSION['usuario_id'])) { ?>

<li class="nav-item">
    <a class="nav-link" href="index.php">

        <?php echo htmlspecialchars($_SESSION['nombre']); ?>

    </a>
</li>




<li class="nav-item">

<a class="nav-link" href="salir.php">
SALIR
</a>

</li>

<?php } else { ?>

<li class="nav-item">

<a class="nav-link login-icono" href="registro.php">

<i class="bi bi-person-fill"></i>

</a>

</li>

<?php } ?>



        </ul>
      </div>
    </div>
</div>
  </nav>
</header>

    <!-- SECCIÓN DE RESULTADOS -->
    <section class="sabores">
        <h1>ELEGÍ <span>DOS</span> SABOR</h1>

        <div class="container mt-4">
            <?php
            if(isset($_POST['busqueda'])) {
                $busqueda = $_POST['busqueda'];

                include("conexion.php");

                // 2. Consulta SQL usando LIKE
                $query = "SELECT * FROM unsabor WHERE sabor LIKE '%$busqueda%'";
                $resultado = mysqli_query($conexion, $query);

                $cantidad = mysqli_num_rows($resultado);

                if($cantidad > 0) {
                    
                    echo "<div class='contenedor-sabores'>";
                    
                    // 3. Recorremos los resultados
                    while($fila = mysqli_fetch_array($resultado)) {
                        echo '
                        <a href="resultadodos.php?id=' . $fila['id'] . '">
                          <div class="sabor">
                            <img src="' . $fila['imagen'] . '" alt="' . $fila['sabor'] . '">
                            <p>' . $fila['sabor'] . '</p>
                          </div>
                        </a>';
                    }
                    echo "</div>";

                } else {
                    echo "<p class='alert alert-danger text-center'>No encontramos ningún sabor con ese nombre.</p>";
                }

                mysqli_close($conexion);
            } else {
                echo "<p class='text-white text-center'>No ingresaste ningún término de búsqueda.</p>";
            }
            ?>
        </div>
    </section>

  <!-- FOOTER -->
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
<p style="color: #ff6fb5;">HELADOS QUE TE REPRESENTAN</p>      </div>
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