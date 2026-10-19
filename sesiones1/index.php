<?php
//session_start(); // llamar a la función session_start() al 
// principio de cada archivo donde quieras usar datos del usuario.
session_start([
    'cookie_lifetime' => 0,              // 0 = expira al cerrar navegador
    'cookie_secure'   => true,           // ⚠️ En localhost sin HTTPS, cámbialo a false temporalmente
    'cookie_httponly' => true,           // Bloquea acceso desde JavaScript
    'cookie_samesite' => 'Lax',          // Previene CSRF básico
    'use_strict_mode' => true,           // Rechaza IDs no generados por PHP
    'name'            => 'DEMO_PHPSESSID' // Nombre personalizado de la cookie
]);

if (isset($_SESSION['usuario'])) { //isset() es una función fundamental en PHP
//  que determina si una variable está declarada y no es null
    header("Location: dashboard.php");
    /*
    método header() en PHP se utiliza para enviar encabezados HTTP sin formato,
     permitiendo redirigir páginas, gestionar caché o definir tipos de contenido.
      Debe llamarse antes de cualquier salida HTML o PHP 
    */
    exit(); // metodo para terminar la ejecucion del programa.
}

$user_cookie = isset($_COOKIE['usuario_recordado']) ? $_COOKIE['usuario_recordado'] : '';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login Profesional</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="login-card">
        <h2>Bienvenido</h2>
        <form action="login1.php" method="POST" class="login-card">
            <div class="form-group">
                <label>Usuario</label>
                <input type="text" name="user" value="<?php echo $user_cookie; ?>" required>
            </div>
            
            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" name="pass" required>
            </div>

            <div class="row-flex">
                <input type="checkbox" name="remember" id="rem">
                <label for="rem">Recordarme</label>
            </div>

            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>

</body>
</html>