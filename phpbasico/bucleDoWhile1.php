<?php

$tirada = 0;
$intentos = 0;

do {
    $tirada = rand(1, 6);
    $intentos++;
    echo "Tirada $intentos: $tirada\n";
} while ($tirada !== 6);

echo "¡Obtuviste un 6 en $intentos intentos!\n";


?>