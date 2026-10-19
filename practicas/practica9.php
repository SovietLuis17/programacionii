<?php

$edad = rand(15,60);
$esVIP = true;
$tieneBoleto = false;
$acceso = ($edad >= 18 && ($esVIP == true || $tieneBoleto == true)) ? "Tiene acceso, bienvenido !" : "No tiene acceso";
echo "<h3> ".$acceso."</h3>";

?>