<?php
/**
 * SOLUCIÓN FINAL: Sistema de Gestión Valencia-Suite
 * Evalúa: Arreglos, Funciones, Bucles, Identidad y Acumuladores.
 */

// 1. Datos de entrada (Arreglo indexado con días de estancia)
$reservas = [3, 10, 0, 8, 5]; 

// 2. Acumulador: Para el cierre de caja (Debe estar fuera del bucle)
$granTotal = 0; 

// 3. Función: Calcula el costo base (Precio por noche = 80)
function calcularCosto($dias) {
    return $dias * 80;
}

echo "--- REPORTE DE CAJA: VALENCIA-SUITE --- \n";
echo "--------------------------------------- \n";

// 4. Bucle: Procesamos cada elemento del arreglo
foreach ($reservas as $indice => $n) {
    
    // 5. Validación de identidad estricta: Saltamos si es idéntico a 0
    if ($n === 0) {
        echo "Reserva " . ($indice + 1) . ": ERROR - Registro vacío. \n";
    } else {
        // Obtenemos el costo base llamando a la función
        $subtotal = calcularCosto($n);
        
        // 6. Lógica de Descuento: 25% si la estancia es mayor a 7 días
        if ($n > 7) {
            $descuento = $subtotal * 0.25; // Calculamos el porcentaje
            $totalFinal = $subtotal - $descuento; // Lo restamos
            $status = "[25% DESC. APLICADO]";
        } else {
            $totalFinal = $subtotal; // Precio normal
            $status = "[TARIFA ESTÁNDAR]";
        }

        // 7. ACUMULACIÓN: Sumamos el monto de esta reserva al total del día
        $granTotal += $totalFinal; 

        // 8. Salida: Concatenamos los datos para el reporte
        echo "Reserva " . ($indice + 1) . ": " . $n . " días | Monto: $" . $totalFinal . " " . $status . "\n";
    }
}

// 9. Resultado final de la auditoría (Gran Total)
echo "--------------------------------------- \n";
echo ">>> TOTAL RECAUDADO EN CAJA: $" . $granTotal . "\n";
echo "--------------------------------------- \n";
?>