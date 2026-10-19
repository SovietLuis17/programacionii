<?php

//crear la clase

class Usuario {

// atributos o propiedades

public $nombre;
public $edad;

// metodo 

public function saludar() {
  return "Hola ! ".$this->nombre." de edad  ".$this->edad;
}


}

//instanciar clase

$usuario = new Usuario();
$usuario->nombre="Luis";
$usuario->edad=18;
echo $usuario->saludar();




?>