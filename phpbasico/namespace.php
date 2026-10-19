<?php

//use function Libs\Matematicas\Aritmetica\resta;
//use function Libs\Matematicas\Aritmetica\suma;

require_once 'libs/matematicas/aritmetica/formula.php';
require_once 'libs/matematicas/financiera/formula.php';

echo "Suma :". Libs\Matematicas\Aritmetica\suma(2,3)."<br>";
echo "Resta : ". Libs\Matematicas\Aritmetica\resta(2,3)."<br>";

echo "Calcular interes compuesto ".Libs\Matematicas\Financiera\tea(10000,0.09,2)."<br>";

?>