<?php

/*Ejercicio 3: Tienda de Ropa - Productos en Oferta
📌 Enunciado:
Filtra productos que cumplen TODAS estas condiciones:
Precio original > $50
Descuento ≥ 20%
Stock > 0
Temporada es "invierno" O "verano" */

$bandera = false;

$ropas = [
    ['nombre' => 'Abrigo', 'precio' => 120, 'descuento' => 30, 'stock' => 5, 'temporada' => 'invierno', 'categoria' => 'prendas'],
    ['nombre' => 'Camiseta', 'precio' => 45, 'descuento' => 25, 'stock' => 10, 'temporada' => 'verano', 'categoria' => 'prendas'],
    ['nombre' => 'Bufanda', 'precio' => 80, 'descuento' => 15, 'stock' => 3, 'temporada' => 'invierno', 'categoria' => 'accesorios'],
    ['nombre' => 'Pantalón', 'precio' => 90, 'descuento' => 25, 'stock' => 0, 'temporada' => 'verano', 'categoria' => 'prendas'],
    ['nombre' => 'Vestido', 'precio' => 150, 'descuento' => 40, 'stock' => 2, 'temporada' => 'verano', 'categoria' => 'prendas']
];

// TU CÓDIGO AQUÍ
// Calcula precio final: precio - (precio * descuento / 100)
// Salida: "- Abrigo: $84.00 (30% OFF) | Stock: 5"
foreach ($ropas as $ropa ) {

  //almaceno en variables
    $nombre = $ropa['nombre'];
    $precio = $ropa['precio'];
    $descuento = $ropa['descuento'];
    $stock = $ropa['stock'];
    $temporada = $ropa['temporada'];
//hago las comparaciones
    $precioOriginal = $precio > 50;
    $totalDescuento = $descuento >= 20;
    $stockTotal = $stock > 0;
    $temporadaTotal = $temporada === 'verano' || $temporada === 'invierno';
    $descuentoTwo =($precio * $descuento /100);
    $totalPrecio = $precio - $descuentoTwo;

    if ($precioOriginal && $totalDescuento && $stockTotal && $temporadaTotal) {
     echo " - $nombre : $totalPrecio ($descuento OFF) | stock : $stock  <br>";
      $bandera = true;
    }


}

if (!$bandera) {
 echo "El producto no esta en esta seleccion ! <br> ";
}


?>