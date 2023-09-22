<?php
session_start();
include("includes/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    $sql = "SELECT id, nombre_completo, contrasena FROM usuarios WHERE correo_electronico = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row && password_verify($contrasena, $row["contrasena"])) {
        $_SESSION["usuario_id"] = $row["id"];
        $_SESSION["nombre_completo"] = $row["nombre_completo"];
        // Redirigir al usuario al índice
        header("Location: index.php");
    } else {
        // Usuario o contraseña incorrectos, redirigir con mensaje de error
        header("Location: login.php?error=1");
    }

    $stmt->close();
}

$conexion->close();
?>
