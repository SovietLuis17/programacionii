<?php

$colegio = [

 'primaria' => [
   'primer_grado '=> 'Jose Martinez',
   'segundo_grado '=> 'Luisa Martinez',
   'tercer_grado ' => 'Iris Vaneja',
   'cuarto_grado' => 'Luis Ramirez',
   'quinto_grado' => 'Rebeca Chambers',
   'sexto_grado' => 'Josefa Ramirez' 
   ],

   'secundaria ' => [
    'primer_grado '=> 'Luis Martinez',
   'segundo_grado '=> 'Josefa Martinez',
   'tercer_grado ' => 'Indira Vaneja',
   'cuarto_grado' => 'Chabela Ramirez',
   'quinto_grado' => 'Julia Chambers'
   ],
];

//var_dump($colegio);

/*
foreach ($colegio as $nivel) {
     foreach ($nivel as $profesor ) {
       echo "$profesor <br> ";
     }
}
*/

foreach ($colegio as $k => $nivel){
    echo "<br> $k   <br>";
    foreach ($nivel as $grado => $profesor) {
     echo "<br> Grado : $grado y profesor : $profesor <br>";
    }
}
?>