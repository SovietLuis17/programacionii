<?php
/*
class Animal {
    public $nombre = "Generico";
    protected $energia = 100;
    private $secreto = "ADN";
    
    public function comer() {
        return "Comiendo...";
    }
    
    protected function dormir() {
        return "Durmiendo...";
    }
    
    private function pensar() {
        return "Pensando...";
    }
}

class Perro extends Animal {
    public function ladrar() {
        echo $this->nombre;    // ✓ Public: Accesible
        echo $this->energia;   // ✓ Protected: Accesible
        // echo $this->secreto; // ✗ Private: ERROR
        echo $this->comer();   // ✓ Public: Accesible
        echo $this->dormir();  // ✓ Protected: Accesible
    }
}

$dog = new Perro();
echo $dog->ladrar();
*/

class Padre {
    public function __construct() {
        echo "Constructor Padre\n";
    }
}

class Hija extends Padre {
    public function __construct() {
        echo "Constructor Hija\n";
    }
}

new Hija(); 
// Salida: "Constructor Hija" (El del padre NO se ejecuta)

?>