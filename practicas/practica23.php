<?php
/*
Lee dos líneas de entrada:

Un precio como un número decimal (p. ej., 49.99)
Un porcentaje de descuento como un número entero (p. ej., 20)
Crea una función llamada calculateFinalPrice que acepte dos parámetros con declaraciones de tipo:

$price como float
$discountPercent como int
La función debe tener una declaración de tipo de retorno de float y debe retornar el precio final después de aplicar el descuento.

Llama a la función con los valores de entrada e imprime el resultado retornado.
*/

function calculateFinalPrice(float $price,int $discountPercent) :float {

   $discount = ($price * $discountPercent / 100);
   $totalPrice = $price - $discount;
   
   return $totalPrice;

}

$resultado = calculateFinalPrice(123.89,15);

echo " El precio con el descuento es de : $resultado ";

?>