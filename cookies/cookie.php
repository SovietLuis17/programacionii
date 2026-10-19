<?php
// 1. secure=false para HTTP/localhost
// 2. httponly=true es correcto (evita acceso por JS)
// 3. Expiración: 1 hora para pruebas
setcookie("preferencia_tema", "claro", time() + 3600, "/", "", false, true);

// Verificar si la cookie ya existe (visible tras recargar)
if (isset($_COOKIE['preferencia_tema'])) {
    echo "🍪 Cookie leída: " . htmlspecialchars($_COOKIE['preferencia_tema']);
} else {
    echo "⏳ Cookie enviada al navegador. Recarga la página para verla.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>COOKIES</title>
</head>
<body>
    <h1>Hola a todos!</h1>
</body>
</html>