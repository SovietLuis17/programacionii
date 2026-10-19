<?php

$nombre = "Juan";
$edad = 25;
$ciudad = "Madrid";

// Crea un arreglo con las variables especificadas
$datos = compact('nombre', 'edad', 'ciudad');
// Resultado: ['nombre' => 'Juan', 'edad' => 25, 'ciudad' => 'Madrid']

print_r($datos);

?>