<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión - Parque Acuático Delfines</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div class="header" style="background-image: url('img/parque.jpg');">
        <div class="header-text">
            <h1>Inicia Sesión en <span class="highlight-text">Delfines Parque Acuático</span></h1>
            <p>Accede a tu cuenta para disfrutar de todas nuestras ofertas y servicios.</p>
        </div>
        <div class="header-buttons">
            <a href="index.php" class="btn btn-back">Volver</a>
        </div>
    </div>

    <div class="container">
        <h2>Iniciar Sesión</h2>
        <?php
        // Mostrar mensaje de error si es necesario
        if (isset($_GET['error']) && $_GET['error'] === '1') {
            echo '<p class="error-message">Usuario o contraseña incorrectos.</p>';
        }
        ?>

        <form action="procesar_login.php" method="POST">
            <label for="correo">Correo Electrónico:</label>
            <input type="text" name="correo" id="correo" required>

            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" id="contrasena" required>

            <button type="submit" class="btn btn-login">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>
