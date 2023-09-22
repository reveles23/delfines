<!DOCTYPE html>
<html>
<head>
    <title>Registro - Parque Acuático Delfines</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div class="header" style="background-image: url('img/parque.jpg');">
        <div class="header-text">
            <h1>Regístrate en <span class="highlight-text">Delfines Parque Acuático</span></h1>
            <p>Disfruta de todas las ventajas de ser miembro. ¡Únete a nosotros hoy mismo!</p>
        </div>
        <div class="header-buttons">
            <a href="index.php" class="btn btn-back">Volver</a>
        </div>
    </div>

    <div class="container">
        <!-- Formulario de registro aquí -->
        <h2>Registrarse</h2>
        <form action="procesar_registro.php" method="POST">
            <label>Nombre Completo:</label>
            <input type="text" name="nombre" required><br>
            <label>Correo Electrónico:</label>
            <input type="email" name="correo" required><br>
            <label>Contraseña:</label>
            <input type="password" name="contrasena" required><br>
            <input type="submit" value="Registrarse">
        </form>
    </div>
</body>
</html>
