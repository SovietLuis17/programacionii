<?php

class Libro {

 public $titulo;
 public $autor;
 public $precio;
 public $categoria;

 // metodo constructor 

   public function __construct($titulo, $autor, $precio,$categoria) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->precio = $precio;
        $this->categoria = $categoria;
    }

    public function mostrarInfo() {
        return "{$this->titulo} por {$this->autor}";
    }

}

$libro1 = new Libro("Cien Años de Soledad","Gabriel Garcia Marquez",70,"Novela");
echo $libro1->mostrarInfo();



?>