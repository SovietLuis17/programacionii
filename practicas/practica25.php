<?php
// 1. Arreglo simple de lecturas
$consumos = [120, 350, 0, 210];

// 2. Función de cálculo base
function obtenerFactura($kwh) {
    return $kwh * 0.5;
}

echo "--- REPORTE DE CONSUMO ELÉCTRICO --- \n";

// 3. Bucle de procesamiento
foreach ($consumos as $indice => $valor) {
    
    // 4. Lógica de identidad estricta
    if ($valor === 0) {
        echo "Periodo " . ($indice + 1) . ": Revisar medidor (0 kWh) \n";
        continue; // Salta al siguiente periodo
    }

    $costoBase = obtenerFactura($valor);

    // 5. Lógica condicional de recargo
    if ($valor > 300) {
        $costoFinal = $costoBase * 1.10; // 10% de recargo
        $nota = "[Exceso de consumo - Penalización aplicada]";
    } else {
        $costoFinal = $costoBase;
        $nota = "[Consumo Normal]";
    }

    // Salida formateada
    echo "Periodo " . ($indice + 1) . ": " . $valor . " kWh | Total: $" . $costoFinal . " " . $nota . "\n";
}
?>