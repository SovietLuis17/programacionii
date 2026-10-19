<?php
session_start();

// Si ya está autenticado, redirigir
if (isset($_SESSION['usuario'])) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <style>
        body { font-family: sans-serif; max-width: 400px; margin: 50px auto; }
        .errores { background: #ffe6e6; color: #b00; padding: 10px; border: 1px solid #f99; margin-bottom: 15px; }
        .errores ul { margin: 0; padding-left: 20px; }
        input, button { width: 100%; padding: 8px; margin: 5px 0 15px; box-sizing: border-box; }
        button { background: #0056b3; color: white; border: none; cursor: pointer; }
        button:hover { background: #003d80; }
    </style>
</head>
<body>
    <h2>Iniciar Sesión</h2>

    <?php if (!empty($_SESSION['login_errors'])): ?>
        <div class="errores">
            <ul>
                <?php foreach ($_SESSION['login_errors'] as $err): ?>
                    <li><?= htmlspecialchars($err) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php unset($_SESSION['login_errors']); // Limpiar errores después de mostrarlos ?>
    <?php endif; ?>

    <form action="login.php" method="POST">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Ingresar</button>
    </form>
</body>
</html>