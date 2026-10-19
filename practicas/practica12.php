<?php

/*📌 Enunciado:
Dado un arreglo de números enteros y un número objetivo:
Si el número existe en el arreglo → Mostrar "✅ [número] encontrado en la posición [índice]"
Si no existe → Mostrar "❌ [número] no encontrado"
Si el arreglo está vacío → Mostrar "⚠️ El arreglo está vacío" */

$numeros = [];//[12, 5, 8, 23, 17, 9];
$objetivo = 17;
$contador = 0;

// TU CÓDIGO AQUÍ
// Usa: in_array(), array_search(), count()

if (!empty($numeros)) {
    foreach ($numeros as $n) {

     if ($n === $objetivo) {
      echo "✅El numero existe dentro del arreglo y esta en la posicion : $contador ";
     }

     else {
       echo "❌ [número]:$objetivo no encontrado";
     }  
     $contador++;
}

}
else {
    echo "Esto esta vacio ";
}



?>