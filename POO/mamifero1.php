<?php

class Mamifero1 {

protected bool $vivo = true;
// constructor con promocion de propiedades
public function __construct(
private string $nombre,
private string $raza,
private int $edad,
private float $peso
) {

}

//METODOS GETTERS
public function getNombre() : string {
  return $this->nombre;
}

public function getRaza() : string {
  return $this->raza;
}

public function getEdad() : int {
  return $this->edad;
}

public function getPeso() : float {
  return $this->peso;
}

 public function isVivo(): bool {
        return $this->vivo;
    }

// METODOS SETTERS

public function setNombre(string $nombre) : void{
  $this->nombre = $nombre;
}

public function setRaza(string $raza) : void{
  $this->raza = $raza;
}

public function setEdad(int $edad) : void{
  if ($edad > 0) {
     $this->edad = $edad;
     }
}

public function setPeso(float $peso) : void{
  if ($peso > 0) {
     $this->peso = $peso;
  }
}

// METODOS DE COMPORTAMIENTO

   public function respirar(): string {
        if ($this->vivo) {
            return "{$this->nombre} está respirando...";
        }
        else {
         return "{$this->nombre} no puede respirar.";
        }

    }

        public function comer(string $alimento): string {
        if ($this->vivo) {
            return "{$this->nombre} está comiendo {$alimento}.";
        }
        else {
           return "{$this->nombre} no puede comer."; 
        }
    }


     public function dormir(): string {
        if ($this->vivo) {
            return "{$this->nombre} está durmiendo... Zzz";
        }
        else {
            return "{$this->nombre} no puede dormir.";
        } 
    }
    
    public function moverse(): string {
        if ($this->vivo) {
            return "{$this->nombre} se está moviendo.";
        }
       else {
        return "{$this->nombre} no se puede mover.";
       } 
    }
    
    public function cumplirAnios(): void {
        $this->edad = $this->edad + 1;
        echo "¡{$this->nombre} cumplió {$this->edad} años!\n";
    }
    
    public function aumentarPeso(float $cantidad): void {
        $this->peso += $cantidad;
        echo "{$this->nombre} ahora pesa {$this->peso} kg.\n";
    }
    
    public function morir(): void {
        $this->vivo = false;
        echo "💔 {$this->nombre} ha fallecido.\n";
    }
    
    // ==========================================
    // MÉTODO DE INFORMACIÓN
    // ==========================================
    
    public function mostrarInfo(): string {
        $estado = $this->vivo ? "Vivo" : "Fallecido";
        return "=== Ficha de {$this->nombre} ===\n" .
               "Edad: {$this->edad} años\n" .
               "Peso: {$this->peso} kg\n" .
               "Raza: {$this->raza}\n" .
               "Estado: {$estado}\n" .
               "==============================";
    }


}






?>