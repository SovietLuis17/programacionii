<?php

class Saiyayin {

// tipado estricto
   public string $nombre = "Goku";
   public int $nivel_pelea = 1000;

   public function saludar():string  {
    return "Hola soy : $this->nombre ";
   }

   public function nivelDePelea():string {
      return "$this->nombre tiene un nivel de pelea de : $this->nivel_pelea ";
   }

    
}
// herencia



//instanciar la clase 


$goku = new Saiyayin();
echo $goku->saludar()."<br>";
echo $goku->nivelDePelea();
echo "<br> <br> ";

/*
$gohan = new SuperSaiyayin();
$gohan->nombre = "Gohan";
$gohan->nivel_pelea= 700;
echo $gohan->saludar()."<br>";
echo $gohan->nivelDePelea();
*/

?>