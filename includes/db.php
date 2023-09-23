<?php
$host = "localhost";
$usuario = "karla";
$contrasena = "";
$base_datos = "delfines";

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
