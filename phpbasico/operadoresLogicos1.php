<?php
$edad = 25;
$tieneLicencia = true;

$puedeConducir = $edad >= 18 && $tieneLicencia;
var_dump($tieneLicencia); // bool(true)

$edad = 16;
$puedeConducir = $edad >= 18 && $tieneLicencia;
var_dump($puedeConducir); // bool(false) - la condición de edad falla
?>