<?php

class Padre {
    public $propiedad = "valor";
    
    public function metodo() {
        return "Método del padre";
    }
}

// La clase Hija hereda todo lo público y protegido del Padre
class Hija extends Padre {
    public function metodoHija() {
        return "Método propio de la hija";
    }
}

$objeto = new Hija();
echo $objeto->propiedad;  // ✓ Accede a propiedad heredada
echo $objeto->metodo();   // ✓ Accede a método heredado
echo $objeto->metodoHija(); // ✓ Accede a método propio



?>