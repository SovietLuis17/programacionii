<?php
// 1. Datos del alumno y sus notas
$estudiante = "Lucía";
$materia = "Desarrollo Web";
$nota1 = 9;
$nota2 = 8.5;
$nota3 = 10;

// 2. Cálculo del promedio (Uso de paréntesis para jerarquía)
$promedio = ($nota1 + $nota2 + $nota3) / 3;

// 3. Salida de resultados
echo "<h2>Reporte de Calificaciones</h2>";
echo "Estudiante: <b>" . $estudiante . "</b><br>";
echo "Materia: " . $materia . "<br>";
echo "--------------------------<br>";
echo "El promedio final es: " . $promedio;
?>