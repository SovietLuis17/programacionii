<?php
require_once 'mamifero1.php';



class Perro extends Mamifero1 {

// constructor
public function __construct(string $nombre, string $raza, int $edad, float $peso,private float $altura ) {
    parent::__construct($nombre,  $raza, $edad, $peso);
    $this->altura = $altura;

}

//METODO GET PROPIO (ALTURA)

public function getAltura() : float {
   return $this->altura;
}

//metodo SET PROPIO (ALTURA)

public function setAltura($altura) : void {
   if ($altura > 0) {
    $this->altura = $altura;
   }
}

//METODOS PROPIO DE LA CLASE
public function ladrar(): string {
        if ($this->isVivo()) {
            return "¡Guau Guau! Soy " . $this->getNombre();
        }
        return "...";
    }

    public function mostrarInfo(): string {
        return parent::mostrarInfo()."Altura : ".$this->altura; 
            
    }
}


?>