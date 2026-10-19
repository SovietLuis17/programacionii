<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="login-card">
        <h2>Hola, <?php echo $_SESSION['usuario']; ?></h2>
        <p>Has ingresado correctamente al sistema.</p>
        <button onclick="location.href='logout.php'">Cerrar Sesión</button>
    </div>
</body>
</html>