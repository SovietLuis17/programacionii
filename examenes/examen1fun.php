<?php
// 1. Arreglo con 5 calificaciones
$notas = [6.5, 7.0, 5.8, 6.2, 7.5];

// 2. Cálculo del promedio
$suma = 0;
$cantidad = count($notas);

foreach ($notas as $nota) {
    $suma += $nota;
}
$promedio = $suma / $cantidad;

// 3. Lógica condicional
if ($promedio >= 7) {
    $estado = "Aprobado";
} elseif ($promedio >= 5) {
    $estado = "En recuperación";
} else {
    $estado = "Reprobado";
}

// 4. Salida por pantalla
echo "Promedio: " . number_format($promedio, 2) . "<br>";
echo "Estado: " . $estado;
?>