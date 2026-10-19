<?php

/*
Desafío

Fácil
Lee tres líneas de entrada:

El primer nombre de una persona (p. ej., Alice)
El apellido de una persona (p. ej., Smith)
Un año de nacimiento (p. ej., 1995)
Crea una función llamada createProfile que acepte tres parámetros con declaraciones de tipo:

$firstName como string
$lastName como string
$birthYear como int
La función debe calcular la edad de la persona (asumir que el año actual es 2024) y devolver una cadena en el siguiente formato:

[firstName] [lastName] is [age] years old.

*/
function createProfile(string $firstName,string $lastName,int $birthYear) {
      $age = 2026 - $birthYear;

      return "$firstName  $lastName is $age years old ";
}

echo createProfile("Luis","Oliveros",1996);


?>