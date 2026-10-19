<?php
session_start();

// Datos de ejemplo
$usuario_valido = "admin";
$password_valido = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $remember = isset($_POST['remember']);

    if ($user === $usuario_valido && $pass === $password_valido) {
        // Crear la sesión
        $_SESSION['usuario'] = $user;

        // Manejo de Cookie: Si el usuario quiere ser recordado
        if ($remember) {
            // Expira en 7 días
            setcookie("usuario_recordado", $user, time() + (7 * 24 * 60 * 60), "/");
        } else {
            // Eliminar cookie si no se marca
            setcookie("usuario_recordado", "", time() - 3600, "/");
        }

        header("Location: dashboard.php");
    } else {
        echo "Error: Credenciales incorrectas. <a href='index.php'>Intentar de nuevo</a>";
    }
}