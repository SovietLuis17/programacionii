<?php

$numero = rand(1,30);

function factorial(int $n):float {
  $resultado = 1;
  for ($i = 1;$i <= $n; $i++) {
    $resultado *= $i;
  }
  return $resultado;
}
 echo factorial($numero);

?>