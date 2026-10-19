<?php
// recordame.php
session_start();
$usuario = $_SESSION['usuario'] ?? null;

// 1. Verificar cookie de persistencia
if (!$usuario && isset($_COOKIE['auth_token'])) {
    $token = $_COOKIE['auth_token'];
    // ⚠️ En producción: verificar hash en BD, no hardcodear
    if (hash_equals('token_seguro_db_123', $token)) {
        $_SESSION['usuario'] = 'usuario_demo';
        $usuario = 'usuario_demo';
        
        // 🔄 Rotar token (mitiga robo/replay)
        $nuevo = bin2hex(random_bytes(32));
        setcookie('auth_token', $nuevo, [
            'expires'  => time() + (7 * 24 * 3600),
            'path'     => '/',
            'secure'   => isset($_SERVER['HTTPS']),
            'httponly' => true,
            'samesite' => 'Lax'
        ]);
    } else {
        setcookie('auth_token', '', ['expires' => time()-3600, 'path' => '/']);
    }
}

// 2. Login con checkbox
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recordar'])) {
    $token = bin2hex(random_bytes(32));
    // Guardar hash en BD aquí...
    setcookie('auth_token', $token, [
        'expires'  => time() + (7 * 24 * 3600),
        'path'     => '/',
        'secure'   => isset($_SERVER['HTTPS']),
        'httponly' => true,
        'samesite' => 'Lax'
    ]);
    $_SESSION['usuario'] = 'usuario_demo';
    header('Location: ' . $_SERVER['PHP_SELF']); exit;
}

// 3. Logout
if (isset($_GET['logout'])) {
    setcookie('auth_token', '', ['expires' => time()-3600, 'path' => '/']);
    session_destroy();
    header('Location: ' . $_SERVER['PHP_SELF']); exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Recordarme</title></head>
<body>
    <?php if ($usuario): ?>
        <h3>✅ Conectado: <?= htmlspecialchars($usuario) ?></h3>
        <a href="?logout=1">Cerrar sesión</a>
    <?php else: ?>
        <form method="post">
            <label><input type="checkbox" name="recordar"> Recordarme 7 días</label><br><br>
            <button type="submit">Entrar</button>
        </form>
    <?php endif; ?>
</body>
</html>