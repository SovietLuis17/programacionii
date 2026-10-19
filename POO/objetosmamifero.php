<?php

require_once 'mamifero1.php';
require_once 'perro.php';

$human = new Mamifero1("Luis","Humano",29,95);
echo $human->mostrarInfo()."<br>";
$human->setEdad(30);
echo "<h3> Actualizacion de estado  </h3> <br>";
echo $human->mostrarInfo();
echo "<h3> Actualizacion de estado  </h3> <br>";
$perro = new Perro("Esteban","Rotwailer",2,50,100);
echo $perro->mostrarInfo();



?>