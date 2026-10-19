<?php

class Saiyayin1 {

// usar el trait
 use TecnicasSimples,TecnicasEspeciales;
 

 
public string $clase = "Saiyayin";
public static $colorCabello = "Negro";

// constructor 

public function __construct(
    public int $nivelPelea,
    public string $nombre,
    public int $nivelFuerza,
    public int $resistencia,
    public string $habilidadEspecial
) {

}


public function informacionSaiyayin() : string {
 return " <h3>
 Nombre : $this->nombre <br>
 Nivel Fuerza (1-10) : $this->nivelFuerza <br>
 Nivel Pelea (1-10) : $this->nivelPelea <br>
 Resistencia : $this->resistencia <br>
 Habilidad especial : $this->habilidadEspecial <br> 
 Clase a la que pertenece : $this->clase <br></h3>
 ";
}

// metodo estatico
public static function historiaSaiyayin() : string {
 return "<p> Los Saiyajin son una raza guerrera del Universo 7, 
 originaria del Planeta Sadala, que se caracterizaba por su inmensa fuerza, 
 colas de mono y la capacidad de transformarse en Ozaru (mono gigante) bajo la luna llena. </p>";
}

// otro metodo estatico

public static function colorCabello() :string {
 return "<p> El color del cabello de un Saiyayin es ".self::$colorCabello."</p> ";
}


}

// herencia









?>