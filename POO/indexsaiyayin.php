<?php

require_once 'traits/tecnicasSimples.php';
require_once 'traits/tecnicasEspeciales.php';
require_once 'saiyayin1.php';
require_once 'supersaiyayin.php';


$goku = new Saiyayin1(nombre:"Goku",nivelFuerza:10,nivelPelea:10,resistencia:100,habilidadEspecial:"KameKameha");
echo $goku->informacionSaiyayin()."<br>";


$gohan = new SuperSaiyayin(nombre:"Gohan",nivelFuerza:8,nivelPelea:8,resistencia:80,habilidadEspecial:" Super Kamehameha");
echo $gohan->informacionSaiyayin()."<br>";
echo $gohan->transformacion();
echo $gohan->aumentarKi();
echo $gohan->usarKamekameha();


 // el operador (::) de resolucion (propiedades y metodos estaticos)
 //echo Saiyayin1::historiaSaiyayin();
 //echo Saiyayin1::colorCabello();



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    body {
        background-color: darkslategrey;
    }
    p {
        text-decoration-line: underline;
        text-justify: auto;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 25px;
         line-height: 1.5;
         color: #ffffff;
    }

    h3 {
       color : #ffffff; 
    }
</style>

</head>
<body>
    
</body>
</html>