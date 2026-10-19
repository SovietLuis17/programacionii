<?php

/*
CLASE CUENTA BANCARIA

*/

 abstract class CuentaBancaria {
   // atributos o propiedades
   protected string $titular;
   protected float $saldo;
   protected string $moneda;

   // constructor

   public function __construct(string $titular, float $saldoInicial, string $moneda='USD') {
    
       if ($saldoInicial < 0) {
         echo "<h2> Error saldo no puede ser negativo </h2> <br>";
         $this->saldo = 0.0;
       } else {
        $this->saldo = $saldoInicial;
       }
       $this->titular = $titular;
       $this->moneda = $moneda;
    
   }

   public function getResume() :string {

   return "Cuenta: [Titular : $this->titular ] | Saldo: [$this->saldo] [$this->moneda]";

   }

}

// CLASES HIJAS 
// CLASE : CUENTA DE AHORRO

class CuentaAhorro extends CuentaBancaria {
 protected float $tasaInteres;

 // constructor

 public function __construct(string $titular, float $saldoInicial, float $tasaInteres) {
   
 //llamado al metodo constructor del padre
   parent::__construct($titular,$saldoInicial);

   if ($tasaInteres <0) {
      echo "<h2> Error tasa de interes no puede ser negativo </h2> <br>";
      $this->tasaInteres = 0.0;
   }
   else {
    $this->tasaInteres = $tasaInteres;
   }
   
 }

 // sobreescritura del metodo del padre
 public function getResume() : string {
    $gananciaAnual = $this->saldo * ($this->tasaInteres / 100);
    $base = parent::getResume();
    return "{$base} | Tipo: Ahorro | Tasa: [$this->tasaInteres]% | Ganancia est. anual: [$gananciaAnual] [$this->moneda]";
 }


}

class CuentaCorriente extends CuentaBancaria {

protected float $limiteDescubierto;

public function __construct(string $titular, float $saldoInicial, float $limiteDescubierto) {

    parent::__construct($titular,$saldoInicial);

    if($limiteDescubierto < 0) {
     echo "<h2> Error tasa de interes no puede ser negativo </h2> <br>";
     $this->limiteDescubierto = 0.0;
    }
    else {
        $this->limiteDescubierto = $limiteDescubierto;
    }


}

 public function getResume(): string {
        $disponibleTotal = $this->saldo + $this->limiteDescubierto;
        $base = parent::getResume();
        return "{$base} | Tipo: Corriente | Límite extra: {$this->limiteDescubierto} {$this->moneda} | Disponible total: " . number_format($disponibleTotal, 2) . " {$this->moneda}";
    }


}








?>