<?php

class Ave {

    public function __construct( public string $especie, public string $reproduccion ,public string $pico, public string $habitat, public string $alimentacion) {
     
    }

    public function volar():string {
         return "Soy un ave de una especie : $this->especie  y estoy VOLANDO ";
    }

    public function comunicarse():string {
       return " Estoy vocalizando y cantando! ";
    }

}



//clase hija

class Aguila extends Ave {

    

    public function __construct(string $especie, string $reproduccion, string $pico, string $habitat, string $alimentacion,  public int $velocidadVuelo) {
      
         parent::__construct( $especie, $reproduccion, $pico, $habitat,$alimentacion);
         $this->velocidadVuelo = $velocidadVuelo;
       
    }
   //POLIMORFISMO
        public function volar():string {
         return " Soy un ave de una especie : $this->especie , y soy AGUILA mi vuelo incrementa a un nivel : $this->velocidadVuelo Kms";
    }

}


//instanciar

$eagle = new Aguila("Aguila Calva","Oviparas","Curvo y fuerte","Lagos / Clima frio","carnivoro",100);
echo $eagle->volar();





?>