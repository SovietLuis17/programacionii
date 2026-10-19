<?php

class CuentaBancaria {

private float $saldo;

  // metodo GET Y metodo SET

  public function getSaldo() :float {
    return $this->saldo;
  }

  public function setSaldo($monto) :void {

     if($monto>0) {
       $this->saldo = $monto;
     }
     else {
        throw new Exception("Saldo no puede ser negativo");
     }


  }


}

// instancia

$cuentaOne = new CuentaBancaria();
$cuentaOne->setSaldo(100);
echo $cuentaOne->getSaldo();
//$cuentaOne->setSaldo(-1);  // esto dara error



?>