<?php

$notas = [12,13,15,16,20];
$promedio = array_sum($notas) / count($notas);
$estatus = $promedio > 13 ? " Estas aprobado " : "Esta desaprobado ";
echo "<h2> ".$estatus."</h2>";
?>