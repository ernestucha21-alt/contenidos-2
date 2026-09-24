<?php

$resultado = $_POST['resultado'];
$respuesta = $_POST['respuesta'];

include "conexion.php";

$consulta_alta = "INSERT INTO opiniones (resultado, respuesta)
VALUES ('$resultado', '$respuesta')";

$consulta = mysqli_query($conexion, $consulta_alta);

mysqli_close($conexion);

if ($consulta) {

    if ($resultado == "Walter White") {
        header("Location: resultadouno.php");
    } else {
        header("Location: resultadodos.php");
    }

    exit();

} else {
    echo "Error al guardar la opinión";
}

?>