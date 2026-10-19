<?php
// 1️⃣ Tema por defecto
$tema = 'claro';

// 2️⃣ Si se envió el formulario, guardar preferencia en cookie
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tema'])) {
    // Validación estricta: solo aceptamos 'oscuro', si no, usamos 'claro'
    $nuevo_tema = ($_POST['tema'] === 'oscuro') ? 'oscuro' : 'claro';

    // 3️⃣ Crear/Actualizar cookie (Sintaxis moderna PHP 7.3+)
    setcookie('preferencia_tema', $nuevo_tema, [
        'expires'  => time() + (30 * 24 * 60 * 60), // 30 días
        'path'     => '/',
        'secure'   => false, // ⚠️ Cambiar a TRUE en producción con HTTPS
        'httponly' => true,
        'samesite' => 'Lax'
    ]);

    // 4️⃣ Recargar la página para aplicar el cambio inmediatamente
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// 5️⃣ Leer cookie si ya existe (después de recargar)
if (isset($_COOKIE['preferencia_tema'])) {
    $tema = ($_COOKIE['preferencia_tema'] === 'oscuro') ? 'oscuro' : 'claro';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio: Cookie de Tema</title>
    <style>
        body {
            font-family: system-ui, -apple-system, sans-serif;
            margin: 0; padding: 40px 20px;
            transition: background-color 0.3s, color 0.3s;
        }
        .claro { background-color: #f8f9fa; color: #212529; }
        .oscuro { background-color: #121212; color: #e0e0e0; }

        .card {
            max-width: 500px; margin: 0 auto; padding: 24px;
            border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            background: <?= $tema === 'claro' ? '#ffffff' : '#1e1e1e' ?>;
        }
        h2 { margin-top: 0; }
        .btn-group { display: flex; gap: 10px; margin: 20px 0; }
        button {
            flex: 1; padding: 12px; border: none; border-radius: 8px;
            font-size: 16px; cursor: pointer; font-weight: 500;
        }
        .btn-activo { background: #0d6efd; color: white; }
        .btn-inactivo { background: #6c757d; color: white; }
        .debug { margin-top: 16px; padding: 10px; background: rgba(0,0,0,0.05); border-radius: 6px; font-family: monospace; font-size: 13px; }
    </style>
</head>
<body class="<?= $tema ?>">
    <div class="card">
        <h2>🌗 Preferencia de Tema</h2>
        <p>Selecciona un modo. Tu elección se guardará en una cookie y persistirá al recargar o volver mañana.</p>
        
        <form method="POST" action="">
            <div class="btn-group">
                <button type="submit" name="tema" value="claro" class="<?= $tema === 'claro' ? 'btn-activo' : 'btn-inactivo' ?>">☀️ Claro</button>
                <button type="submit" name="tema" value="oscuro" class="<?= $tema === 'oscuro' ? 'btn-activo' : 'btn-inactivo' ?>">🌙 Oscuro</button>
            </div>
        </form>

        <div class="debug">
            🔍 Valor de la cookie: <strong><?= htmlspecialchars($_COOKIE['preferencia_tema'] ?? 'No definida') ?></strong><br>
            🕒 Expira: <?= isset($_COOKIE['preferencia_tema']) ? date('d/m/Y H:i', time() + (30 * 24 * 60 * 60)) : '-' ?>
        </div>
    </div>
</body>
</html>