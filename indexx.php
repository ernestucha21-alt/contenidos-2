<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prod digital 2</title>
</head>
<body>
    <h1> Funcionando </h1>
    <hr>

    <div>
        <?php
        $saludo = "<i>Hola, esto es PHP</i>";
        $nombre = "Ernes";
        $precio_unitario = 12300.45;
        $iva = 1.21;
        $precio_final = $precio_unitario * $iva;
?>

<h2> Precio Producto: $<?php echo $precio_unitario; ?>
<br>
Con IVA incluido: $<?php echo $precio_final; ?>

</h2>

<hr>
        <?php
        $precio_unitario= 900021.34;
        ?>

<h2>
    Precio Producto: $<?php echo $precio_unitario; ?>
    <br>
    Con IVA incluido: $<?php echo $precio_final; ?>
</h2>

<div class="box-base">
    <?php
    // $nro1 = 200;
    // $nro2 = 500;
    // echo $nro1 + $nro2;
    
    $nombre = "Ernes";
    $apellido = "Spollansky";
    echo "Mi nombre es " . $nombre . " " . $apellido;
   
    $user1 = [$nombre, "Spollansky", 19, "mail@example.com"];
    echo "<br>";
    echo $user1 [0] . " " . $user1[1];
    
    $user2 = ["nombre" => "Ernes", "apellido" => "Spollansky", "edad" => 19, "estudio" => "comunicación digital", "universidad" => "palermo", "día" => "jueves"];
    echo "<br>";
    echo "<h2> Hola! Me llamo " . $user2["nombre"] . " " . $user2["apellido"] . ", tengo " . $user2["edad"] . " años y estudio " . $user2["estudio"] . " en la universidad " . $user2["universidad"] . ". Hoy es " . $user2["día"] . "." . "</h2>";
    ?>
</div class="form">
<h2> enviando datos por un formulario</h2>
<form action="" method="post">
    <label for="usuario">usuario:</label>
    <input type="text" id="usuario" name="usuario">
    <br>
    <label for="contraseña">Contraseña:</label>
    <input type="password" id="contraseña" name="contraseña">
    <br>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">
    <br>
    <label for="cancion favorita">Canción Favorita:</label>
    <input type="text" id="cancion favorita" name="cancion favorita">
    <br>
    <input type="submit" value="Enviar">
</form>
<div>



</div>
    </div>
</body>
</html>