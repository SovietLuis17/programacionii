<?php
$esFinSemana = true;
$esVacaciones = false;

$diaLibre = $esFinSemana || $esVacaciones;
var_dump($diaLibre); // bool(true) - el fin de semana es verdadero

$esFinSemana = false;
$diaLibre = $esFinSemana || $esVacaciones;
var_dump($diaLibre); // bool(false) - ambas son falsas
?>