<?php
 

 require_once 'clases1.php';

 $cuentas = [

  new CuentaAhorro("Jose Alfonzo",300,7),
  new CuentaCorriente ("Luis Oliveros",500,400),
  new CuentaCorriente("Iris Osorio ", -100, -200),
  new CuentaAhorro("Rebeca Flores de Oliveros", 5600,10)

 ];

 foreach ($cuentas as $cuenta) {

   echo $cuenta->getResume()."<br>";

 }








?>