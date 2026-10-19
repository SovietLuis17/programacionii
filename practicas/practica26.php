<?php

//arreglo
$reservas = [3,8,0,5,7,10,6,14];

//definir funcion  

function generarCobro (int $dias):int {
    $estancia = 80;
    return $estancia * $dias;
}


// recorrer el arreglo 

foreach ($reservas as $indice => $dia) {


   if ($dia === 0) {
         
      echo "Error reserva no valida! <br>";
   }
   else {
   
    $total = generarCobro($dia);

    if ($dia > 7) {

       $totalDescuento = $total - 50;

       echo "Cliente : ".($indice + 1)." Total a pagar es : $totalDescuento <br> ";

    }
    else {

      echo "Cliente : ".($indice + 1)." Total a pagar es : $total  <br>";

    }

   }
 
}


?>