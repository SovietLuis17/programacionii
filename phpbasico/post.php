<?php

if ($_POST) {

$nombre = $_POST['nombre'];

echo "Bienvenido ! $nombre";

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar un mensaje</title>
</head>
<body>
    <form method="POST" action="post.php">
    <label>Introduce tu nombre:</label>
    <input type="text" name="nombre">
    <br><br>
    <button type="submit">Mensaje</button>
</form>
    
</body>
</html>