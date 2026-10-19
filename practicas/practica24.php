<?php

/*⚡ Reto Práctico: Monitor de Consumo Eléctrico "Valencia-Energy"El EscenarioEl estudiante debe crear 
un script que procese las lecturas de consumo (en Kilovatios/hora) de una vivienda durante 
4 periodos, calcule el costo total y determine si se debe aplicar una "Tarifa de Penalización" 
por exceso de consumo.Requerimientos Técnicos:Datos (Arreglo Simple): Un arreglo $lecturas con
 4 valores enteros (ej: 150, 280, 400, 100).Cálculo (Funciones): Crear una función calcularCosto 
 que reciba los kWh y los multiplique por un precio fijo (ej: 0.5). Debe retornar el resultado.
 Lógica de Control (Condicionales): * Si la lectura es idéntica a 0 (===), imprimir: "Periodo 
 sin consumo o medidor inactivo".Si la lectura supera los 300 kWh, aplicar un recargo del 10% 
 al costo de ese periodo.Procesamiento (Bucles): Recorrer el arreglo para mostrar el detalle 
 de cada periodo.📝 Versión Resumida para el Estudiante (Hoja de Examen)

  Ejercicio: Gestor de Energía PHPInstrucciones:Datos: Crea un arreglo llamado $consumos
  con los valores: 120, 350, 0, 210.Función: Define obtenerFactura($kwh). Debe multiplicar los 
  $kwh$ por 0.5 y retornar el valor.Proceso: Usa un bucle (foreach o for) para revisar cada 
  consumo del arreglo.Reglas: >    * Si el consumo es exactamente 0 (identidad estricta ===),
   muestra: "Revisar medidor".Si el consumo es mayor a 300, suma un 10% adicional al costo total 
   de ese periodo (multa por exceso).Salida: Muestra el consumo y el costo final de cada periodo 
   usando concatenación con el punto (.). */


// 1. Arreglo simple de lecturas
$consumos = [120, 350, 0, 210,300,210];

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