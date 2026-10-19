<?php
require_once 'saiyayin1.php';
class SuperSaiyayin extends Saiyayin1 {
  public string $clase = "Super Saiyayin ";


  public function transformacion() {

  if ($this->nivelFuerza>7) {
     $texto = " <h4>  $this->nombre se transformo en  $this->clase </h4> ";
  } else {
     $texto = "<h4> $this->nombre NO se pudo transformar en  $this->clase </h4>";
  }
    return $texto;
  }

}




?>
!