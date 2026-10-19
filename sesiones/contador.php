<?php

// las sesiones se crean normalmente la inicio del codigo
// si se va a colocar nombre a la sesion, debe ser antes del ssesion_star
session_name("LOGIN");
//session_id("phpCON");
session_start();

/*
//crear variable de session
if (isset($_SESSION['CON'])) {
    $_SESSION['CON']++;
} else {
    $_SESSION['CON'] = 1;
}
*/

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones PHP</title>
</head>

<body>
    <?php echo "Hola! " . $_SESSION['Nombre'] . " <br> Bienvenido! "; ?>
    <a href="cerrar.php">Cerrar Sesion</a>

</body>

</html>