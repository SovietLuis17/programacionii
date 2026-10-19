<?php

class Computadora {

public function __construct(public string $marca,
public string $modelo,
public string $procesador,
 public string $memoriaRam,
  public int $vRam) {

}

public function mostrarInfo() : string {

return "Computadora : <br> Modelo : $this->modelo | <br> Marca : $this->marca | <br> Procesador : $this->procesador <br> | Memoria RAM : $this->memoriaRam <br> | Video : $this->vRam <br> ";

}


}

//instanciar

$laptop = new Computadora(marca:"Lenovo",modelo:"ThinkFink V8",memoriaRam:"32GB",procesador:"I9 147898GF Intel",vRam:16);
echo $laptop->mostrarInfo();




?>