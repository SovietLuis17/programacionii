<?php

/**
 * Calcula el promedio final del curso de PHP 7
 * 
 * @param array $notas Array con las notas en formato:
 *                     [
 *                         'ec' => [notas...],  // Evaluación continua
 *                         'ep' => nota,        // Examen parcial
 *                         'ef' => nota,        // Examen final
 *                         'p1' => nota,        // Práctica 1
 *                         'p2' => nota         // Práctica 2
 *                     ]
 * @return string Mensaje con promedio y estado
 */
function calcularPromedioPHP7($notas) {
    
    // ===== VALIDACIÓN DE DATOS =====
    $errores = [];
    
    // Validar que existan todas las claves necesarias
    $clavesRequeridas = ['ec', 'ep', 'ef', 'p1', 'p2'];
    foreach ($clavesRequeridas as $clave) {
        if (!isset($notas[$clave])) {
            $errores[] = "Falta la clave '$clave' en el array de notas";
        }
    }
    
    if (!empty($errores)) {
        return "ERROR: " . implode(", ", $errores);
    }
    
    // Validar evaluación continua (debe ser un array)
    if (!is_array($notas['ec']) || count($notas['ec']) === 0) {
        return "ERROR: La evaluación continua debe ser un array con al menos una nota";
    }
    
    // Validar que todas las notas estén entre 0 y 20
    $notasParaValidar = array_merge(
        $notas['ec'], 
        [$notas['ep'], $notas['ef'], $notas['p1'], $notas['p2']]
    );
    
    foreach ($notasParaValidar as $index => $nota) {
        if (!is_numeric($nota)) {
            return "ERROR: La nota en la posición $index no es un número válido";
        }
        
        $nota = floatval($nota);
        if ($nota < 0 || $nota > 20) {
            return "ERROR: La nota $nota está fuera del rango permitido (0-20)";
        }
    }
    
    // ===== CÁLCULO DEL PROMEDIO =====
    
    // 1. Calcular promedio de evaluación continua
    $promedioEC = array_sum($notas['ec']) / count($notas['ec']);
    
    // 2. Aplicar la fórmula de ponderación
    $promedioFinal = (
        $promedioEC * 0.2 +   // Evaluación continua: 20%
        $notas['ep'] * 0.2 +  // Examen parcial: 20%
        $notas['ef'] * 0.4 +  // Examen final: 40%
        $notas['p1'] * 0.1 +  // Práctica 1: 10%
        $notas['p2'] * 0.1    // Práctica 2: 10%
    );
    
    // 3. Formatear el promedio a 2 decimales
    $promedioFormateado = number_format($promedioFinal, 2);
    
    // 4. Determinar estado
    $estado = ($promedioFinal >= 13) ? "APROBADO" : "DESAPROBADO";
    
    // ===== RETORNAR RESULTADO =====
    return "Promedio Final: $promedioFormateado - Estado: $estado";
}

/**
 * Función opcional: Muestra un reporte detallado
 */
function mostrarReporteDetallado($notas) {
    echo "=========================================\n";
    echo "   REPORTE DE EVALUACIÓN - PHP 7\n";
    echo "=========================================\n\n";
    
    // Calcular promedio de EC
    $promedioEC = array_sum($notas['ec']) / count($notas['ec']);
    
    echo "EVALUACIÓN CONTINUA:\n";
    echo "  Notas: " . implode(", ", $notas['ec']) . "\n";
    echo "  Promedio: " . number_format($promedioEC, 2) . "\n";
    echo "  Ponderación (20%): " . number_format($promedioEC * 0.2, 2) . "\n\n";
    
    echo "EXAMEN PARCIAL:\n";
    echo "  Nota: " . $notas['ep'] . "\n";
    echo "  Ponderación (20%): " . number_format($notas['ep'] * 0.2, 2) . "\n\n";
    
    echo "EXAMEN FINAL:\n";
    echo "  Nota: " . $notas['ef'] . "\n";
    echo "  Ponderación (40%): " . number_format($notas['ef'] * 0.4, 2) . "\n\n";
    
    echo "PRÁCTICA 1:\n";
    echo "  Nota: " . $notas['p1'] . "\n";
    echo "  Ponderación (10%): " . number_format($notas['p1'] * 0.1, 2) . "\n\n";
    
    echo "PRÁCTICA 2:\n";
    echo "  Nota: " . $notas['p2'] . "\n";
    echo "  Ponderación (10%): " . number_format($notas['p2'] * 0.1, 2) . "\n\n";
    
    // Calcular promedio final
    $promedioFinal = (
        $promedioEC * 0.2 +
        $notas['ep'] * 0.2 +
        $notas['ef'] * 0.4 +
        $notas['p1'] * 0.1 +
        $notas['p2'] * 0.1
    );
    
    echo "-----------------------------------------\n";
    echo "PROMEDIO FINAL: " . number_format($promedioFinal, 2) . "\n";
    echo "ESTADO: " . (($promedioFinal >= 13) ? "✅ APROBADO" : "❌ DESAPROBADO") . "\n";
    echo "=========================================\n";
}

// ===== EJEMPLOS DE USO =====

echo "=== EJEMPLO 1 ===\n";
$notas1 = [
    'ec' => [15, 18, 17],
    'ep' => 10,
    'ef' => 16,
    'p1' => 17,
    'p2' => 4
];

echo calcularPromedioPHP7($notas1) . "\n\n";
mostrarReporteDetallado($notas1);

echo "\n\n=== EJEMPLO 2 ===\n";
$notas2 = [
    'ec' => [12, 14, 13, 15],
    'ep' => 18,
    'ef' => 19,
    'p1' => 20,
    'p2' => 16
];

echo calcularPromedioPHP7($notas2) . "\n\n";

echo "\n=== EJEMPLO 3 (DESAPROBADO) ===\n";
$notas3 = [
    'ec' => [8, 10, 9],
    'ep' => 7,
    'ef' => 11,
    'p1' => 12,
    'p2' => 8
];

echo calcularPromedioPHP7($notas3) . "\n\n";

echo "\n=== EJEMPLO 4 (LÍMITE 13) ===\n";
$notas4 = [
    'ec' => [13, 13, 13],
    'ep' => 13,
    'ef' => 13,
    'p1' => 13,
    'p2' => 13
];

echo calcularPromedioPHP7($notas4) . "\n\n";

echo "\n=== EJEMPLO 5 (ERROR - Nota fuera de rango) ===\n";
$notas5 = [
    'ec' => [15, 25, 17],  // 25 está fuera de rango
    'ep' => 10,
    'ef' => 16,
    'p1' => 17,
    'p2' => 4
];

echo calcularPromedioPHP7($notas5) . "\n";

?>