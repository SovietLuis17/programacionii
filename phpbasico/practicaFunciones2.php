<?php

function calcNums(...$num) {
  $contadorImpar = 0;
  $contadorPar = 0;

  //recorrer
     foreach ($num as $n) {
      
       if ($n % 2 != 0) { 
          $contadorImpar++;
           echo "$n  numero IMPAR <br>";
        
       }
       else {
        $contadorPar++;
        echo "$n  numero PAR <br>";
    
       }
    }
 echo "<h2> Cantidad de numeros PARES : $contadorPar   </h2>";
 echo "<h2> Cantidad de numeros IMPARES : $contadorImpar   </h2>";
}

calcNums(1,43,56,57,890,123,121332,445,232,2441);


?>