<?php

$host = 'localhost';
$userMySQL = 'root';
$passwordMySQL = '';
$bbdd = 'icentity';

$conexion = mysqli_connect($host, $userMySQL, $passwordMySQL, $bbdd)
    or exit("Error en la conexion.");

?>