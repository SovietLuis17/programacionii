<?php
// 1️⃣ LEER: ¿Ya existe una preferencia guardada?
$tema = $_COOKIE['tema'] ?? 'claro';

// 2️⃣ PROCESAR: Si enviaron el formulario POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cambiar'])) {
    // Invertir el valor actual
    $tema = ($tema === 'claro') ? 'oscuro' : 'claro';
    
    // GUARDAR en cookie (1 día, ruta raíz, segura para producción)
    setcookie('tema', $tema, [
        'expires'  => time() + 86400,
        'path'     => '/',
        'secure'   => false, // Cambiar a TRUE en HTTPS real
        'httponly' => true,
        'samesite' => 'Lax'
    ]);

    // 🔄 PATRÓN PRG: Redirigir para limpiar el POST
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit; // ⛔ Detener ejecución inmediatamente
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Tema con POST</title>
    <style>
        body {
            font-family: system-ui, sans-serif;
            text-align: center;
            padding: 60px 20px;
            transition: background 0.3s, color 0.3s;
        }
        .claro { background: #f5f5f5; color: #111; }
        .oscuro { background: #111; color: #fff; }
        
        button {
            padding: 12px 24px;
            font-size: 16px;
            cursor: pointer;
            border: 2px solid currentColor;
            background: transparent;
            border-radius: 8px;
        }
    </style>
</head>
<body class="<?= htmlspecialchars($tema) ?>">
    <h1>🎨 Modo <?= ucfirst($tema) ?></h1>
    <p> Recarga la página y la preferencia se mantiene.</p>
    
    <!-- Formulario POST puro (sin JS) -->
    <form method="POST">
        <button type="submit" name="cambiar">⚡ Cambiar Fondo y Texto</button>
    </form>
</body>
</html>