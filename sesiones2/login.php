<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $errors = [];

    // 🔍 Validación con preg_match
    // Usuario: solo letras y números, entre 3 y 20 caracteres
    if (!preg_match('/^[a-zA-Z0-9]{3,20}$/', $username)) {
        $errors[] = "El usuario debe tener entre 3 y 20 caracteres alfanuméricos.";
    }

    // Contraseña: mínimo 8 chars, al menos 1 letra, 1 número y 1 carácter especial
    if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/', $password)) {
        $errors[] = "La contraseña debe tener al menos 8 caracteres, incluyendo una letra, un número y un carácter especial.";
    }

    // Si hay errores de validación, volver al login
    if (!empty($errors)) {
        $_SESSION['login_errors'] = $errors;
        header("Location: index.php");
        exit;
    }

    // 🔐 Simulación de autenticación (sin base de datos)
    $credenciales = [
        'admin'   => 'Admin123!',
        'usuario' => 'Prueba1@'
    ];

    if (isset($credenciales[$username]) && $credenciales[$username] === $password) {
        $_SESSION['usuario'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $_SESSION['login_errors'] = ["Credenciales incorrectas."];
        header("Location: index.php");
        exit;
    }
}

// Si se accede directamente por GET, redirigir al formulario
header("Location: index.php");
exit;