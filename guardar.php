<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Datos recibidos</h2>
        <hr>
        <div class="form w-75">
            <?php
            $nombre   = $_POST['nombre'];
            $email    = $_POST['email'];
            $pelicula = $_POST['pelicula'];

            include "conexion.php";

            $consulta_alta = "INSERT INTO colaboraciones (Nombre, Email, Pelicula) VALUES ('$nombre', '$email', '$pelicula')";

            $consulta = mysqli_query($conexion, $consulta_alta);

            if ($consulta) {
                echo "<div class='alert alert-success'>Información guardada correctamente</div>";
            } else {
                echo "<div class='alert alert-danger'>Error al guardar la información</div>";
            }

            mysqli_close($conexion);
            ?>
        </div>
    </div>

</body>
</html>