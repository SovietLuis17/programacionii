<?php
$tirada = 0;
$intentos = 0;

while ($tirada !== 6) {
    $tirada = rand(1, 6); // funcion rand()
    $intentos++;
    echo "Tirada $intentos: $tirada <br>";
}

echo "¡Obtuviste un 6 en $intentos intentos! <br>";
?>