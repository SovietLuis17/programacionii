<?php
// 1. Arreglo simple de días de estancia
$reservas = [3, 8, 0, 5];

// 2. Función con parámetro y retorno
function generarCobro($dias) {
    $tarifa = 80;
    return $dias * $tarifa;
}

echo "--- SISTEMA DE FACTURACIÓN VALENCIA-SUITE --- \n";

// 3. Bucle de procesamiento
foreach ($reservas as $index => $cantDias) {
    
    // 4. Lógica de identidad estricta (Punto clave)
    if ($cantDias === 0) {
        echo "Reserva " . ($index + 1) . ": ERROR - Los días no pueden ser cero. \n";
    } else {
        $subtotal = generarCobro($cantDias);
        
        // 5. Condicional de descuento
        if ($cantDias > 7) {
            $totalFinal = $subtotal - 50;
            $nota = "(Descuento de $50 por estancia larga)";
        } else {
            $totalFinal = $subtotal;
            $nota = "(Tarifa estándar)";
        }

        // Salida con concatenación
        echo "Reserva " . ($index + 1) . ": " . $cantDias . " días | Total: $" . $totalFinal . " " . $nota . "\n";
    }
}
?>