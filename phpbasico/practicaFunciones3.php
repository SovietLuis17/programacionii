<?php
// ===== PASO 1: Definir la oración =====
$oracion = "El rapido zorro marron salta sobre el perro perezoso";

echo "=== DETECTOR DE VOCALES === <br>";
echo "Oración analizada: <br> $oracion <br>";

// ===== PASO 2: Convertir a minúsculas y separar en caracteres =====
$oracionMinus = strtolower($oracion);   // funcion que convierte a miniscula
$caracteres = str_split($oracionMinus); // funcion que convierte un estring en un arreglo

// ===== PASO 3: Inicializar contadores =====
$vocales = ['a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0];
$vocalesEncontradas = [];

// ===== PASO 4: Recorrer cada carácter y contar vocales =====
foreach ($caracteres as $caracter) {
    if (in_array($caracter, ['a', 'e', 'i', 'o', 'u'])) { 
        $vocales[$caracter]++;
        $vocalesEncontradas[] = $caracter;
    }
}

// ===== PASO 5: Mostrar resultados =====
echo "VOCALES ENCONTRADAS (únicas):\n";
$vocalesUnicas = array_unique($vocalesEncontradas); //devuelve una matriz sin valores duplicados  
sort($vocalesUnicas);
echo implode(", ", $vocalesUnicas) . " <br>";

echo "CONTEO POR VOCAL: <br>";
$totalVocales = 0;
foreach ($vocales as $vocal => $cantidad) {
    if ($cantidad > 0) {
        echo "  $vocal: $cantidad veces <br>";
        $totalVocales += $cantidad;
    }
}

echo "\nTOTAL DE VOCALES EN LA ORACIÓN: $totalVocales\n";
?>