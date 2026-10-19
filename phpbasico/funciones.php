<?php

#fucion sin parametros
function primerMensaje() {
  return "Hola mundo!";
}

//echo primerMensaje();

#funcion con parametros
function holaNombre ($nombre) {
  return "Hola : $nombre";
}

//echo holaNombre("Luis Oliveros");


#funcion con parametros inicializados

function holaNombreDos($nombre = 'user') {
  return "Hola , como estas ? : $nombre ";
}


//echo holaNombreDos("Luis Oliveros");


#funcion con parametro de referencia

$x = 1;
function incremento (&$x) {
   $x++;
}
/*
for ($a = 1; $a <5; $a++) {
incremento($x);
}


echo $x;
*/


#funciones con longitud de parametros (N  parametros)
function addShoppingCar (... $items) {
    foreach ($items as $item) {
        echo $item."<br>";
    }
}

//addShoppingCar('carro','zapato','perrarina','calcio');

#funciones recursivas

function buscaranioPar($year) {
 if ($year % 2 == 0) {
   echo " $year es PAR ";
 }
 if ($year != date('Y')) {
    buscaranioPar($year + 1);
 }

}

buscaranioPar(2000);

?>