<?php
/* 📌 Enunciado:
Una tienda aplica descuentos así:
15% si compra ≥ $100 Y es cliente frecuente (true)
10% si compra ≥ $100 O es cliente frecuente (pero no ambas condiciones)
5% si compra ≥ $50 (sin importar cliente frecuente)
0% en otros casos */

$montoCompra = rand(40,300);

$clienteFrecuente = true;

$descuento = 0;

$totalCompra = 0;


if ($montoCompra >= 100 && $clienteFrecuente === true) {

  $descuento = $montoCompra * 0.15;
  $totalCompra = $montoCompra - $descuento;
  
  echo "<h2> Gracias por su compra de : $montoCompra, <br> su descuento fue de : $descuento
   <br> y el precio total a pagar con el descuento fue : $totalCompra <br> ";

}
elseif ($montoCompra >= 100 || $clienteFrecuente === true) {

  $descuento = $montoCompra * 0.10;
  $totalCompra = $montoCompra - $descuento;
  
  echo "<h2> Gracias por su compra de : $montoCompra, <br> su descuento fue de : $descuento
   <br> y el precio total a pagar con el descuento fue : $totalCompra <br> ";

}
elseif ($montoCompra >= 50 && $montoCompra < 100) {

 
  $descuento = $montoCompra * 0.05;
  $totalCompra = $montoCompra - $descuento;
  
  echo "<h2> Gracias por su compra de : $montoCompra, <br> su descuento fue de : $descuento
   <br> y el precio total a pagar con el descuento fue : $totalCompra <br> ";

}

else {
    echo "<h2> Su compra fue : $montoDescuento  , Gracias por su compra! <br>";
}


?>