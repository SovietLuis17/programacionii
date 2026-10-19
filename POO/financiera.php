<?php


class Financiera {

// atributos o propiedades , con modificar de acceso privado
private $capital;
private $tasa;
private $periodo;

// metodo constructor
 public function __construct(float $capital,float $tasa,int $periodo) {

   $this->capital = $capital;
   $this->tasa = $tasa;
   $this->periodo = $periodo;
 }

 // metodo destructor 

 /*
 public function __destruct() {
  echo '<br> Ha finalizado el calculo y se procede a destruir el objeto <br>';
 }
*/

// metodos 

public function tea() {
// capital * (1 + tasa ) elevado periodo

return $this->capital * ((1+ $this->tasa) **$this->periodo);

}


}

//instanciar la clase 

$obj = new Financiera(10000,0.09,2);
echo "El interes compuesto de 10000 a tasa de 0.09 de interes a dos años es de : <br> ";
echo $obj->tea();


?>