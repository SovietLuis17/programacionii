<?php
class Usuario {
    protected $nombre;
    
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
}

class Admin extends Usuario {
    private $nivel;
    
    public function __construct($nombre, $nivel) {
        // Primero inicializamos lo del padre
        parent::__construct($nombre);
        // Luego lo propio
        $this->nivel = $nivel;
    }
    
    public function informacion() {
        return "$this->nombre y el nivel $this->nivel";
    }

}

// instanciar
$admin = new Admin("Luis",10);
echo $admin->informacion();


?>