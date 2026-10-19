<?php

/*
📌 Enunciado:
Calcula el % de descuento en una expresión ternaria anidada (con paréntesis obligatorios para PHP ≥ 7.4):
20% si: $monto >= 100 Y ($esMiembro O $cuponValido)
10% si: $monto >= 50 Y $monto < 100
0% en otro caso */
$esMiembro = true;
$cuponValido = true;
$monto = 110;

$descuento = ($monto >= 100 && ($esMiembro || $cuponValido)) ? 20 : (($monto >= 50 && $monto < 100) ? 10 : 0);

echo $descuento;

?>