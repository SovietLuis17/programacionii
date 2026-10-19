<?php
// Verificar si la cookie existe
if (isset($_COOKIE['visitas'])) {
$visitas = $_COOKIE['visitas'] + 1;
$mensaje = "Bienvenido de nuevo.";
 
    if ($visitas == 10) {
    setcookie('monitoreo', 'usuario frecuente', //crea una cookie
     time() + (365 * 24 * 60 * 60), '/');
    }

} else {
$visitas = 1;
$mensaje = "¡Bienvenido por primera vez!";
}
// Crear/actualizar la cookie (1 año)
setcookie('visitas', $visitas,
time() + (365 * 24 * 60 * 60), '/');
echo "$mensaje Número de visitas: $visitas";
?>
