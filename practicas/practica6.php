<?php

/* Ejercicio 2: Validador de Acceso
📌 Enunciado:
Un sistema requiere estas reglas para acceso:
✅ Acceso total: Es mayor de edad (≥18) Y tiene membresía activa (true)
⚠️ Acceso limitado: Es mayor de edad O tiene membresía activa (pero no ambas)
❌ Acceso denegado: Menor de edad Y sin membresía  */

$edad = rand (15,55);
$tieneMembresia = false;

if ($edad >= 18 && $tieneMembresia === true) {

   echo "<h2> Bienvenido , tienes acceso total </h2> <br> ";

}
elseif ($edad >= 18 || $tieneMembresia === true) {
    echo "<h2> bienvenido , tienes acceso a algunas funciones, para acceso ilimitado debes ser premium </h2> <br> ";
}
 elseif ($edad < 18 && $tieneMembresia !== true) {
    echo "Lo siento pero no puedes acceder eres menor de edad y sin membresia <BR>";
 }


?>