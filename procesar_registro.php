<?php
include("includes/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $contrasena = password_hash($_POST["contrasena"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre_completo, correo_electronico, contrasena) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sss", $nombre, $correo, $contrasena);

    if ($stmt->execute()) {
        // Redirigir al usuario a la página de inicio de sesión
        header("Location: login.php");
    } else {
        echo "Error al registrar el usuario.";
    }

    $stmt->close();
}

$conexion->close();
?>
