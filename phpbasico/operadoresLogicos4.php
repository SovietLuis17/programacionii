<?php
$age = 25;
$hasTicket = true;
$isVIP = false;

// Puede entrar si: tiene boleto AND (es adulto OR es VIP)
$canEnter = $hasTicket && ($age >= 18 || $isVIP);
var_dump($canEnter); // bool(true)
?>