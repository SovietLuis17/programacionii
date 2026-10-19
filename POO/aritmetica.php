<?php

namespace POO;

//definir una clase
class Aritmetica {


// metodos
public function suma(float $a , float $b):float {
 return $a + $b;
}

public function resta(float $a , float $b):float {
 return $a - $b;
}

public function multiplicacion(float $a ,float $b):float {
 return $a * $b;
}

public function division(float $a , float $b):float {
 return $a / $b;
}

public function esPar(float $n) {
return $this->calcularParOImpar($n);
}
public function esImpar(float $n) {
 return $this->calcularParOImpar($n,false);
}

// con el modificador de acceso privado, solo podra ser accedido desde la misma clase
private function calcularParOImpar(float $n, bool $par = true) {

 if ($par) {
   return $n % 2 == 0;
 }
 else {
    return $n % 2 !== 0;
 }

}


}

//instanciar la clase 

$obj = new Aritmetica();
echo "Resultado de la operacion suma de la clase : ".$obj->suma(2,4)."<br>";
echo "Resultado de la operacion multiplicacion (6,2) : ".$obj->multiplicacion(6,2)."<br>";
echo "Verificar si el numero 6 es par : <br> ";
echo $obj->esPar(6) ? "Es par " : "Es impar "."<br>";




?>