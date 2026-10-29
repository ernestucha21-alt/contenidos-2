<?php

session_start();

$error = "";

if (isset($_SESSION['usuario_id'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email=trim($_POST['email'] ?? '');
    $contrasena = $_POST['contrasena'] ?? '';

    include "conexion.php";

    // Buscar usuario registrado

    $consulta = mysqli_prepare(
        $conexion,
        "SELECT id, nombre, email, contrasena FROM usuarios WHERE email = ?"
    );

    mysqli_stmt_bind_param($consulta, "s", $email);

    mysqli_stmt_execute($consulta);

    mysqli_stmt_bind_result(
        $consulta,
        $id,
        $nombre,
        $email_usuario,
        $contrasena_guardada
    );

    if (mysqli_stmt_fetch($consulta)) {

        // Comprobar contraseña

        if (password_verify($contrasena, $contrasena_guardada)) {

            session_regenerate_id(true);

            $_SESSION['usuario_id'] = $id;
            $_SESSION['nombre'] = $nombre;
            $_SESSION['email'] = $email_usuario;

            header("Location: index.php");
            exit();

        } else {

            $error = "Email o contraseña incorrectos.";

        }

    } else {

        $error = "Email o contraseña incorrectos.";

    }

    mysqli_stmt_close($consulta);
    mysqli_close($conexion);
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Icentity - Iniciar sesión</title>

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
<a class="nav-link login-icono" href="registro.php">
<i class="bi bi-person-fill"></i>
</a>
</li>

</ul>

</div>
</div>
</nav>

</header>


<!-- LOGIN -->

<section class="formulario login-formulario">

<div class="container">

<h2>INICIÁ SESIÓN</h2>

<p class="login-subtitulo">
Ingresá tus datos y volvé a Icentity.
</p>

<?php if ($error != "") { ?>

<div class="alert alert-danger registro-error">
<?php echo htmlspecialchars($error); ?>
</div>

<?php } ?>


<form action="login.php" method="POST">

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

<button type="submit" class="btn btn-enviar">
INGRESAR
</button>

<p class="registro-link">

¿Todavía no tenés una cuenta?

<a href="registro.php">Registrate</a>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


