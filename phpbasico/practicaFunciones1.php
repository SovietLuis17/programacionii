<?php

function calcularEdad ($edad) {

   if ($edad >= 18 && $edad < 30) {
         return "Eres mayor de edad , tienes $edad ";
   }
   elseif ($edad >= 30 && $edad <40) {
      return "Bievenido , tienes un edad de $edad y tenemos atraciones diferentes para ti ";
   }
   elseif ($edad >= 50 && $edad < 70) {
    return "Bievenido, tenemos servicios exclusivos para su edad ";
   }
   else {
    return "Lo siento, no podemos ayudarte ";
   }
}

echo calcularEdad(30);


?>

<?php


function obtenerNombreYEdad() {
    return ["Ana", 28];
}

$datos = obtenerNombreYEdad();

[$nombre,$edad] = $datos;

 // desestructuración (PHP 7.1+)
echo "$nombre tiene $edad años."; // → Ana tiene 28 años.
?>

<?php
$mensaje = "Global";

function prueba() {
    $mensaje = "Local";
    echo $mensaje . "\n"; // → Local
}

prueba();
echo $mensaje; // → Global
?>