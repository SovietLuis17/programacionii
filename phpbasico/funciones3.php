<?php
/*
 
Al igual que puedes declarar tipos para los parámetros, también puedes especificar 
qué tipo debe retornar una función. Las declaraciones de tipo de retorno le indican a PHP 
exactamente qué tipo de valor enviará de vuelta tu función, ayudando a capturar errores cuando 
una función accidentalmente retorna el tipo incorrecto.
Para agregar un tipo de retorno, coloca dos puntos seguidos del tipo después del paréntesis 
de cierre de la lista de parámetros:

 */
function add(int $a, int $b): int {
    return $a + $b;
}

echo add(5, 3);
?>