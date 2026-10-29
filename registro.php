<?php
session_start();



$error = '';



if (isset($_SESSION['usuario_id'])) {
   header('Location: index.php');
   exit();
}



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $nombre = trim($_POST['nombre'] ?? '');
   $email = trim($_POST['email'] ?? '');
   $contrasena = $_POST['contrasena'] ?? '';



   if ($nombre === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($contrasena) < 8) {
       $error = 'Completá los datos correctamente. La contraseña debe tener al menos 8 caracteres.';
   } else {
       include 'conexion.php';



       $consulta = mysqli_prepare($conexion, 'SELECT id FROM usuarios WHERE email = ?');
       mysqli_stmt_bind_param($consulta, 's', $email);
       mysqli_stmt_execute($consulta);
       mysqli_stmt_store_result($consulta);
       $ya_existe = mysqli_stmt_num_rows($consulta) > 0;
       mysqli_stmt_close($consulta);



       if ($ya_existe) {
           $error = 'Este email ya está registrado. Iniciá sesión.';
       } else {
           $contrasena_segura = password_hash($contrasena, PASSWORD_DEFAULT);
           $guardar = mysqli_prepare($conexion, 'INSERT INTO usuarios (nombre, email, contrasena) VALUES (?, ?, ?)');
           mysqli_stmt_bind_param($guardar, 'sss', $nombre, $email, $contrasena_segura);



           if (mysqli_stmt_execute($guardar)) {
               $usuario_id = mysqli_insert_id($conexion);
               mysqli_stmt_close($guardar);
               mysqli_close($conexion);



               session_regenerate_id(true);
               $_SESSION['usuario_id'] = $usuario_id;
               $_SESSION['nombre'] = $nombre;
               $_SESSION['email'] = $email;



               header('Location: index.php');
               exit();
           } else {
               $error = 'No se pudo completar el registro.';
           }
           mysqli_stmt_close($guardar);
       }
       mysqli_close($conexion);
   }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Icentity - Registro</title>
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
                   <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
                   <li class="nav-item"><a class="nav-link" href="index.php#experiencia">ELEGÍ</a></li>
                   <li class="nav-item"><a class="nav-link" href="colaboraciones.php">COLABORACIONES</a></li>
                   <li class="nav-item"><a class="nav-link" href="nosotros.php">NOSOTROS</a></li>
                   <li class="nav-item">
                       <a class="nav-link login-icono" href="registro.php" aria-label="Registrarse">
                           <i class="bi bi-person-fill"></i>
                       </a>
                   </li>
               </ul>
           </div>
       </div>
   </nav>
</header>





<!-- REGISTRO -->

<section class="formulario registro-formulario">

    <div class="container">

        <h2>CREÁ TU CUENTA</h2>

        <p class="registro-subtitulo">
            Registrate y empezá a formar parte de Icentity.
        </p>

        <!-- MENSAJE DE ERROR -->

        <?php if ($error != "") { ?>

            <div class="alert alert-danger registro-error">
                <?php echo htmlspecialchars($error); ?>
            </div>

        <?php } ?>


        <!-- FORMULARIO -->

        <form action="registro.php" method="POST">

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
                minlength="8"
                required>


            <!-- NEWSLETTER -->

            <div class="form-check registro-newsletter">

                <input
                    class="form-check-input"
                    type="checkbox"
                    id="newsletter"
                    name="newsletter"
                    value="true">

                <label class="form-check-label" for="newsletter">
                    Deseo recibir novedades de Icentity.
                </label>

            </div>


            <!-- BOTÓN REGISTRO -->

            <button type="submit" class="btn btn-enviar">
                REGISTRARME
            </button>


            <!-- ENLACE A LOGIN -->

            <p class="registro-link">

                ¿Ya tenés una cuenta?

                <a href="login.php">Iniciá sesión</a>

            </p>

        </form>

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


<!-- BOOTSTRAP -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

