<?php

function contarCaracteres(string $cadena) : string  {
   $letras = str_split($cadena);
   $numeroLetras = count($letras) -1;
   $mensaje = "El numero de caracteres es : ".$numeroLetras;
   return $mensaje;
}

$sentencia = "Tengo muchas letras y caracteres ";

echo contarCaracteres($sentencia);

?>