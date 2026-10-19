<?php

/*
📌 Enunciado:
Escribe un programa que reciba un número entero y muestre:
"Es positivo y par" si es > 0 y divisible entre 2
"Es negativo e impar" si es < 0 y NO divisible entre 2
"Es cero" si es exactamente 0
"Es positivo e impar" o "Es negativo y par" para los otros casos
*/
$numero = rand(-100,100);

if ($numero > 0 && ($numero % 2 == 0)) {
  
  echo "<h2> Este numero es positivo y numero par </h2> <br> el numero fue : $numero <br> ";

}
elseif ($numero < 0 && ($numero % 2 != 0)) {

  echo "<h2> Este numero es negativo y numero impar </h2> <br> el numero fue : $numero <br> ";
}

elseif ($numero === 0) {
  echo "<h2> Este numero es cero </h2> <br> el numero fue : $numero <br>";
}

elseif (($numero > 0 && ($numero % 2 == 0) || $numero < 0 && ($numero % 2 != 0) )) {
 echo "<h2> Es positivo e impar o Es negativo y par para los otros casos </h2><br> el numero fue : $numero <br> ";
}

?>