<?php
$nombre = "";
$hora = 13;
$saludo = empty($nombre)  ? "¡Hola, invitado!" : ($hora < 12 ? "¡Buenos días, $nombre!" : "¡Buenas tardes, $nombre!");
echo $saludo;



?>