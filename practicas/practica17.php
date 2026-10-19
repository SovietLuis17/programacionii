<?php

/*
Lee un entero único de la entrada que representa una suma objetivo.

Usa un bucle while para sumar números consecutivos comenzando 
desde 1 (1, 2, 3, 4, ...) hasta que el total alcance o exceda la suma objetivo.

Imprime el total final en la primera línea, y el último número que se añadió en la segunda línea. */


$objetivo = rand(1,20);
$total = 0;
$num = 0;

while ($total < $objetivo) {
 $num++;
 $total += $num;
}

echo $total . "<br>";
echo $num;


?>