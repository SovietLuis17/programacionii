<?php

class Persona {

 // constructor 
 public function __construct(
 private string $nombre,
 private int $edad,
 private string $correo
 ) {

 }

 // METODOS GET
  public function getNombre() : string{
   return $this->nombre;
  }

  public function getEdad() : int {
    return $this->edad;
  }

  public function getCorreo() : string {
   return $this->correo;
  }



  //METODOS SET

  public function setNombre($nombre) : void {
    $this->nombre = $nombre;
  }

  
  public function setEdad($edad) : void {
     if ($edad>0) {
       $this->edad = $edad;
     }
  }

  public function setCorreo($correo) : void {
    $this->correo = $correo;
  }

  // metodo propio de la clase

  public function saludar() : string {
    return "Hola mi nombre es $this->nombre y tengo $this->edad años. ";
  }

  public function onomastico () : string {
   $this->edad += 1;
   return " Estoy de cumpleaños! estoy cumpliendo $this->edad años ";

  }

}


$persona = new Persona(nombre:"Luis Oliveros", correo:"luissoliveros17@gmail.com",edad:29);
echo $persona->saludar()."<br>";
echo $persona->onomastico();






?>