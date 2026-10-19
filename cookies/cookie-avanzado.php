<?php
// carrito.php
$secreto = getenv('APP_SECRET') ?: 'clave_dev_cambiar';
$nombre_cookie = 'carrito_invitado';

function leer_carrito($n, $s) {
    if (!isset($_COOKIE[$n])) return [];
    $p = explode('|', $_COOKIE[$n], 2);
    if (count($p) !== 2) return [];
    [$data, $firma] = $p;
    if (!hash_equals(hash_hmac('sha256', $data, $s), $firma)) return [];
    return json_decode($data, true) ?: [];
}

function guardar_carrito($n, $datos, $s) {
    $json = json_encode($datos);
    $firma = hash_hmac('sha256', $json, $s);
    setcookie($n, $json.'|'.$firma, [
        'expires'  => time() + (14 * 24 * 3600),
        'path'     => '/',
        'secure'   => isset($_SERVER['HTTPS']),
        'httponly' => true,
        'samesite' => 'Lax'
    ]);
}

$carrito = leer_carrito($nombre_cookie, $secreto);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['agregar'])) {
    $prod = htmlspecialchars($_POST['producto'], ENT_QUOTES, 'UTF-8');
    $carrito[] = ['nombre' => $prod, 'cant' => 1];
    guardar_carrito($nombre_cookie, $carrito, $secreto);
    header('Location: ' . $_SERVER['PHP_SELF']); exit;
}

if (isset($_GET['vaciar'])) {
    setcookie($nombre_cookie, '', ['expires' => time()-3600, 'path' => '/']);
    $carrito = [];
    header('Location: ' . $_SERVER['PHP_SELF']); exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Carrito Cookie</title></head>
<body style="font-family:system-ui;max-width:600px;margin:40px auto;">
    <h2>🛒 Carrito (cookie firmada)</h2>
    <form method="post">
        <input type="text" name="producto" placeholder="Ej: Auriculares" required style="padding:8px;width:70%;">
        <button type="submit" name="agregar" style="padding:8px 16px;">Agregar</button>
    </form>
    <hr>
    <?php if (empty($carrito)): ?>
        <p>Carrito vacío.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($carrito as $i): ?>
                <li><?= htmlspecialchars($i['nombre']) ?> (x<?= $i['cant'] ?>)</li>
            <?php endforeach; ?>
        </ul>
        <a href="?vaciar=1" style="color:#d32f2f;">🗑️ Vaciar</a>
    <?php endif; ?>
</body>
</html>