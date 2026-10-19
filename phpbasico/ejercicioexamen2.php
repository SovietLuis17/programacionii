<?php

$semana = [
    [1, "Lunes"],
    [2, "Martes"],
    [3, "Miércoles"],
    [4, "Jueves"],
    [5, "Viernes"],
    [6, "Sábado"],
    [7, "Domingo"]
];

$i = 0;

while ($i < 7) {
    for ($j = 0; $j < 2; $j++) {
        echo "", $semana[$i][$j];
        echo " ";
    }

    $i++;
}

?>