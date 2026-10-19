<?php

// ussando CONSTRUCTOR PROPERTY PROMOTION

class Guerrero {

// constructor property promotion
   public function __construct(public string $nombre,public string $arma,public int $nivel_habilidad, public int $level) {

   }

   public function mostrarInfo() {

    return "Soy $this->nombre, tengo nivel : $this->level , y uso actuamente uso $this->arma como arma <br> ";

    }

}

$warrior = new Guerrero(nombre:"Corso17",arma:"Ballesta",nivel_habilidad:15,level:50);
echo $warrior->mostrarInfo();


?>