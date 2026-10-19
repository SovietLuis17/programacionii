<?php

abstract class Figura {
    protected $color;
     
    public function __construct($color) {
       $this->color = $color;
    }

    # metodo abstracto
    /* Al igual que la clase no se detalla su funcionamiento 
    solo se crea la estructura  */

    abstract public function calcularArea(): float;

    #Metodo concreto con implementacion

    public function getColor() : string {
        return $this->color;
    }
 
}

class Circulo extends Figura {
   
   private $radio;

   // constructor 
   public function __construct($color,$radio) {
      parent::__construct($color);
      $this->radio = $radio;
   }

   //sobreescritura del metodo abstracto y se convierte en un metodo implementable
   public function calcularArea(): float {
     return pi() * $this->radio ** 2;
  
   }
 
}


$circle = new Circulo("Negro",4);
echo $circle->getColor();
echo number_format($circle->calcularArea(),2);


?>