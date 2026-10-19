<?php

function procesarDatos (string $nombre, int $edad, float $salario) : array {
  return [
    "nombre" => $nombre,
    "edad" => $edad,
    "salario" => $salario
  ];
}

$datos = procesarDatos("Luis",30,500);
//var_dump($datos);
echo $datos["nombre"];
?>