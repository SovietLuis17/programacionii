<?php

$notas = [
   [12,14,15,16,16], //estudiante 1
   [12,14,13,12,16], //estudiante2
   [19,17,17,19,18], //estudiante 3
   [01,19,02,15,13] //estudiante 4
];

foreach ($notas as $indixe =>$fila ) {
    echo "Estudiante : $indixe <br>";
    foreach ($fila as $indixe1 => $numero) {
      echo "Nota ($indixe1) : $numero <br>";
    }

}

?>