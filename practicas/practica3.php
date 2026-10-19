<?php

/*
$contraseña1 = 1234;
$contraseña2 = '1234';

if ($contraseña1 === $contraseña2) { // operador de igualdad
 echo "Bienvenido puedes ingresa ! <br>";
}*/

$nombre = null;

/*
if (isset($nombre) || $nombre === "") {
 echo "el campo esta vacio ";
}
else {
    echo "El campo no esta vacio";
}*/

/*
if (!isset($nombre) || $nombre === "") {
  echo "Esta vacio o no esta definido";
}
else {
    echo "No esta vacio ";
}
    */

$logueado = false;

if (!$logueado) {
    echo "Por favor, inicia sesión";
} else {
    echo "Bienvenido al sistema";
}
?>