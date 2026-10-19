<?php
$mostrar = true;

// 1️⃣ Si hizo clic en "cerrar", guardamos cookie y recargamos
if (isset($_GET['cerrar'])) {
    setcookie('banner_ok', '1', time() + (7 * 86400), '/'); // 7 días
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// 2️⃣ Si la cookie ya existe, ocultamos el banner
if (isset($_COOKIE['banner_ok'])) {
    $mostrar = false;
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Banner</title></head>
<body>
    <h1>🏠 Mi Página</h1>
    
    <?php if ($mostrar): ?>
        <div style="background:#fff3cd; padding:12px; border:1px solid #ffeaa7; margin:15px 0;">
            📢 <strong>¡Aviso!</strong> Nuestro horario cambiará el próximo lunes.
            <a href="?cerrar=1">✖ Cerrar</a>
        </div>
    <?php else: ?>
        <p style="color:green;">✅ Banner cerrado por 7 días.</p>
    <?php endif; ?>
</body>
</html>