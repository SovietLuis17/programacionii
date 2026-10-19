<?php

class Coche {

// propiedades o atributos 

public $color;
public $marca;
public $modelo;

// metodo

public function arrancar() {
    echo "El carro esta arrancando RUM RUM RUM ! <br> ";
}

public function apagar() {
    echo "Apagando el carro <br> ";
}

}

// instanciar la clase

$carro = new Coche();
$carro->color = "Azul metalico";
$carro->modelo = "Depredator Xtreme";
$carro->marca = "Centauro";

echo "Los datos son : <br> Color :  ".$carro->color."Modelo : <br> ".$carro->modelo."Marca : <br>".$carro->marca."<br>";
echo $carro->arrancar()."<br>";
echo $carro->apagar();


?>