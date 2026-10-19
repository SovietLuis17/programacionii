<?php

// crear clase

class Mascota {

public $raza;

public $nombre;

public $edad;


public function __construct($r,$n,$ed) {
    $this->raza = $r;
    $this->nombre = $n;
    $this->edad = $ed;

}

public function mostrarInfo() {
  
return "Hola : <br> mi nombre es : $this->nombre <br> soy de la raza $this->raza <br> y tengo $this->edad <br> ";

}

}
// usando nombre de parametros
$mascota = new Mascota(r:"Gato Montes",n:"Lucas",ed:2);
echo $mascota->mostrarInfo();


?>