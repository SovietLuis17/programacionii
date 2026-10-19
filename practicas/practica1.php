<?php

/* crear un algoritmo que precise cuantas letras tiene una oracion
previamente definida */



$oracion = "Esta es una oracion y debes determinar cuentas letras tengo";

// se necesita buscar una funcion que convierta una oracion en un arreglo

# se crea una variable que almacenara lo que devuelve str_split, entonces se convierte en un arreglo
$caracteres = str_split($oracion);

//print_r($caracteres);

echo "La cantidad de las letras del arreglo es : ".count($caracteres);

?>