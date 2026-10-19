<?php
// variable global
$granTotal = 0;
// crear un arreglo indexado
$reservas = array(3,10,0,8,5,12,6); // [3,10,0,8,5,12,6];


//definir una funcion , en este caso una funcion con tipo de parametro y parametro de salida

function calcularDia(int $dias) : float {
  $costoDia = 80;
  return $dias * $costoDia;
}

//MOSTRAR MENSAJE
echo "--------------REPORTE DE CAJA : VALENCIA-SUITE -------------------- <br> ";

// recorrer el arreglo

foreach($reservas as $indice => $dia) {

   if ($dia === 0) {

      echo "Reserva $indice : ERROR - Registro Vacio <br>";

   }
   else {

     $subtotal = calcularDia($dia);
      
     if ($dia > 7) {

        $descuento = $subtotal * 0.25;
        $totalFinal = $subtotal - $descuento;
        $estatus = "[DESCUENTO 25% ]";
     }
     else {
        $totalFinal = $subtotal;
        $estatus = "[TARIFA NORMAL]";
     }

   }
   $granTotal += $totalFinal;
   echo " Reserva $indice :  $dia | monto : $totalFinal ".$estatus."  <br>  ";
   echo "TOTAL RECAUDADO EN CAJA : $granTotal   <br> ";
}
?>