<?php
class Padre {
    public function saludar() {
        echo "Hola desde el Padre\n";
    }
}

class Hijo extends Padre {
    public function saludar() {
        parent::saludar(); // Ejecuta el saludo del padre
        echo "Y también desde el Hijo\n";
    }
}

$obj = new Hijo();
$obj->saludar();
// Salida:
// Hola desde el Padre
// Y también desde el Hijo



?>