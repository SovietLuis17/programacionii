<?php
// ==========================================================
// 1. CONFIGURACIÓN SEGURA DE SESIONES (SIEMPRE AL INICIO)
// ==========================================================
session_start([
    'cookie_lifetime' => 0,              // 0 = expira al cerrar navegador
    'cookie_secure'   => true,           // ⚠️ En localhost sin HTTPS, cámbialo a false temporalmente
    'cookie_httponly' => true,           // Bloquea acceso desde JavaScript
    'cookie_samesite' => 'Lax',          // Previene CSRF básico
    'use_strict_mode' => true,           // Rechaza IDs no generados por PHP
    'name'            => 'DEMO_PHPSESSID' // Nombre personalizado de la cookie
]);

// ==========================================================
// 2. HELPERS Y RUTEO BÁSICO
// ==========================================================
function isLoggedIn(): bool {
    return isset($_SESSION['user_id']);
}

function requireLogin(): void {
    if (!isLoggedIn()) {
        header('Location: ?action=login');
        exit;
    }
}

function logout(): void {
    $_SESSION = [];                      // Vaciar variables
    session_destroy();                   // Eliminar archivo/datos en servidor
    setcookie(session_name(), '', time() - 3600, '/'); // Eliminar cookie en cliente
}

$action = $_GET['action'] ?? (isLoggedIn() ? 'dashboard' : 'login');
$error  = $_GET['error'] ?? '';

// ==========================================================
// 3. PROCESAR LOGOUT
// ==========================================================
if ($action === 'logout') {
    logout();
    header('Location: ?action=login');
    exit;
}

// ==========================================================
// 4. PROCESAR LOGIN (POST)
// ==========================================================
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $action === 'login') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    // 🔐 Credenciales de prueba (NUNCA usar esto en producción)
    $valid_user      = 'admin';
    $valid_pass_hash = password_hash('123456', PASSWORD_DEFAULT);

    if ($username === $valid_user && password_verify($password, $valid_pass_hash)) {
        // ✅ PASO CRÍTICO: Regenerar ID para evitar Fijación de Sesión
        session_regenerate_id(true);

        // Guardar datos relevantes en sesión
        $_SESSION['user_id']        = 1;
        $_SESSION['username']       = $username;
        $_SESSION['role']           = 'admin';
        $_SESSION['last_activity']  = time(); // Para control de inactividad

        header('Location: ?action=dashboard');
        exit;
    }

    $error = 'Usuario o contraseña incorrectos';
}

// ==========================================================
// 5. PROTEGER DASHBOARD + TIMEOUT DE INACTIVIDAD
// ==========================================================
if ($action === 'dashboard') {
    requireLogin();

    // ⏱️ Timeout por inactividad (15 minutos = 900 segundos)
    $timeout = 900;
    if (time() - ($_SESSION['last_activity'] ?? 0) > $timeout) {
        logout();
        header('Location: ?action=login&error=timeout');
        exit;
    }

    // Actualizar marca de actividad
    $_SESSION['last_activity'] = time();
}

// ==========================================================
// 6. VISTAS (HTML)
// ==========================================================
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Demo Sesiones PHP</title>
    <style>
        body { font-family: system-ui, sans-serif; max-width: 500px; margin: 40px auto; padding: 0 20px; }
        .box { border: 1px solid #ccc; padding: 20px; border-radius: 8px; margin-top: 20px; }
        input, button { width: 100%; padding: 10px; margin: 8px 0; box-sizing: border-box; }
        .error { color: #d32f2f; background: #ffebee; padding: 10px; border-radius: 4px; }
        .success { color: #2e7d32; background: #e8f5e9; padding: 10px; border-radius: 4px; }
        pre { background: #f5f5f5; padding: 10px; overflow-x: auto; }
    </style>
</head>
<body>

<?php if ($action === 'login'): ?>
    <h2>🔐 Iniciar Sesión</h2>
    <?php if ($error): ?>
        <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <form method="POST" action="?action=login">
        <input type="text" name="username" placeholder="Usuario (admin)" required autofocus>
        <input type="password" name="password" placeholder="Contraseña (123456)" required>
        <button type="submit">Entrar</button>
    </form>
    <small>🔒 Usa: <b>admin</b> / <b>123456</b></small>

<?php elseif ($action === 'dashboard'): ?>
    <h2>📊 Panel Protegido</h2>
    <div class="success">✅ Sesión activa y segura</div>
    <div class="box">
        <h3>Datos almacenados en $_SESSION:</h3>
        <pre><?php print_r($_SESSION); ?></pre>
    </div>
    <a href="?action=logout">
        <button style="background:#d32f2f; color:#fff; border:none; cursor:pointer;">Cerrar Sesión</button>
    </a>
<?php endif; ?>

</body>
</html>