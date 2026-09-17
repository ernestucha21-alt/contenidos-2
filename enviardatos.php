<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $title = "UTN 2021" ?>
    
    <title><?php echo $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>

    
    <div class="container">
        <h2>Datos recibidos</h2>
        <hr>
    <div class="form w-75">
        <?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

include "conexion.php";

$consulta_alta = "INSERT INTO usuarios 
VALUES (0, '$nombre', '$email', '$contrasena')";

$consulta = mysqli_query($conexion, $consulta_alta);

if ($consulta) {
    echo "Usuario guardado correctamente";
} else {
    echo "Error al guardar el usuario";
}

mysqli_close($conexion);

?>
    </div>
</div>


</body>
</html>

