<?php 

//declarar variable global 
$totalGlobal = 0;

//construir arreglo asociativO
$reservas = [
    "Reserva 1 : " => rand(1,30),
    "Reserva 2 : " => rand(1,20) ,
    "Reserva 3 : " => rand(1,30),
    "Reserva 4: " => rand(1,30),
    "Reserva 5 : " => rand(1,10),
    "Reserva 6 : " => rand(1,20),
    "Reserva 7 : " => rand(1,20)
];

// CONSTRUIR FUNCION

function calcularCosto(int $dias) : float {
 $costoDia = 80;
 return $costoDia * $dias; 
}

echo "---- REPORTE CAJA : VALENCIA SUITE ---- <br>";

foreach ($reservas as $reserva => $dias) {

  if ($dias === 0) {

     echo "$reserva : ERROR - REGISTRO VACIO O NO VALIDO !";

  }
  else {
     $subtotal = calcularCosto($dias); 
    if ($dias > 7) {
     
      $descuento = $subtotal * 0.25;
      $total = $subtotal - $descuento; 
      $estatus = "[25% DE DESCUENTO ($descuento) ]";
    }
    else {
        $total = $subtotal;
        $estatus = "[TARIFA ESTANDAR ] ";
    }
  }

  $totalGlobal += $total;

  echo "$reserva  Dias : $dias | $estatus | Monto a pagar  : $total  <br>";
  //echo "TOTAL RECAUDADO EN CAJA : $totalGlobal <br> ";

}
echo " ----- TOTAL RECAUDADO EN CAJA : $totalGlobal <br> ";

?>