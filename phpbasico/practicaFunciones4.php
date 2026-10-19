
<?php

$oracion = "Hola mamaguevo, eres un pasado , me debes PLATA ";

echo "DETECTOR DE UNA ORACION : <br> LA ORACION ES : <br> $oracion <br> ";

// se necesita garantizar que la oracion este en miniscula 
/* se usa la funcion strtolower  que retorna un string en miniscula */

$oracionMinus = strtolower($oracion);
 // necesitamos convertir la oracion en un arreglo con la funcion str:split
$caracteres = str_split($oracionMinus);

// inicializar contadores a traves de un arreglo asociativo
$vocales = ['a'=> 0,'e'=> 0,'i'=> 0,'o'=> 0,'u'=> 0];
$vocalesEncontradas = []; 

// ===== PASO 4: Recorrer cada carácter y contar vocales =====
foreach ($caracteres as $caracter) {
    if (in_array($caracter, ['a', 'e', 'i', 'o', 'u'])) { 
        $vocales[$caracter]++;
        //$vocalesEncontradas[] = $caracter;
    }
}

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