<?php

/* cuantas vocales tiene una oracion  */

#definir una variable que contiene la oracion
$oracion = "Esta es una oracion y debes determinar cuentas letras tengo";

#necesariamente convertir todo uniformemente, osea tener todo en mayuscula o minisculas

$oracionMinuscula = strtolower($oracion);

//conviertir oracion en un arreglo

$oracionArreglo = str_split($oracionMinuscula);

// crear un arreglo asociativo que tenga clave = letra y valor = numero o contador
$vocales = ['a' => 0,'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0];

// se recorre el arreglo para luego verificar cada una de las letras con la funcion in_array
foreach ($oracionArreglo as $caracter) {
     if (in_array($caracter, ['a', 'e', 'i', 'o', 'u'])) { 
        $vocales[$caracter]++;
     }
}

echo "<h1> BIENVENIDO AL CONTADOR DE VOCALES </h1>";
echo "  Analizando la siguiente oracion : <br> ' $oracion ' <br> <br>";

//recorrer el arreglo vocales que tiene los contadores


foreach ($vocales as $vocal => $valor) {

  echo "Vocal :  $vocal , encontrada : $valor  veces <br>";

}

$totalVocales = array_sum($vocales);

echo "Total de vocales encontradas  :  $totalVocales  <br>";



?>