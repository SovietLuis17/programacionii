<?php
// 1️⃣ Leer estado actual (si no hay cookie, empieza en "claro")
$tema = $_COOKIE['modo'] ?? 'claro';

// 2️⃣ Si se pulsó el botón, invertir y guardar en cookie
if (isset($_GET['cambiar'])) {
    $tema = ($tema === 'claro') ? 'oscuro' : 'claro';
    setcookie('modo', $tema, time() + 86400, '/'); // 1 día de duración
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Toggle Fondo</title>
    <style>
        body {
            margin: 0; padding: 50px; font-family: system-ui, sans-serif;
            transition: background 0.3s, color 0.3s; text-align: center;
        }
        .claro { background: #f4f4f5; color: #18181b; }
        .oscuro { background: #18181b; color: #ffffff; }
        button {
            padding: 12px 24px; font-size: 16px; cursor: pointer;
            border: 2px solid currentColor; background: transparent;
            border-radius: 8px; margin-top: 20px;
        }
    </style>
</head>
<body class="<?= $tema ?>">
    <h1>🎨 Modo <?= ucfirst($tema) ?></h1>
    <p>La página recuerda tu elección aunque cierres el navegador.</p>
    
    <!-- Al hacer clic, recarga con ?cambiar=1 -->
    <a href="?cambiar=1" style="text-decoration:none;">
        <button>⚡ Cambiar Fondo y Texto</button>
    </a>
</body>
</html>