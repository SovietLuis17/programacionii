<?php

class Mamifero {
    // Propiedades (Atributos)
    private string $nombre;
    private int $edad;
    private float $peso;
    private string $color;
    protected bool $vivo = true;
    
    // Constructor con Promoción de Propiedades (PHP 8+)
    public function __construct(
        private string $nombre,
        private int $edad,
        private float $peso,
        private string $color
    ) {
        // El constructor se ejecuta automáticamente al crear el objeto
    }
    
    // ==========================================
    // GETTERS (Lectura de propiedades privadas)
    // ==========================================
    
    public function getNombre(): string {
        return $this->nombre;
    }
    
    public function getEdad(): int {
        return $this->edad;
    }
    
    public function getPeso(): float {
        return $this->peso;
    }
    
    public function getColor(): string {
        return $this->color;
    }
    
    public function isVivo(): bool {
        return $this->vivo;
    }
    
    // ==========================================
    // SETTERS (Modificación de propiedades)
    // ==========================================
    
    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }
    
    public function setEdad(int $edad): void {
        if ($edad >= 0) {
            $this->edad = $edad;
        }
    }
    
    public function setPeso(float $peso): void {
        if ($peso > 0) {
            $this->peso = $peso;
        }
    }
    
    public function setColor(string $color): void {
        $this->color = $color;
    }
    
    // ==========================================
    // MÉTODOS DE COMPORTAMIENTO
    // ==========================================
    
    public function respirar(): string {
        if ($this->vivo) {
            return "{$this->nombre} está respirando...";
        }
        return "{$this->nombre} no puede respirar.";
    }
    
    public function comer(string $alimento): string {
        if ($this->vivo) {
            return "{$this->nombre} está comiendo {$alimento}.";
        }
        return "{$this->nombre} no puede comer.";
    }
    
    public function dormir(): string {
        if ($this->vivo) {
            return "{$this->nombre} está durmiendo... Zzz";
        }
        return "{$this->nombre} no puede dormir.";
    }
    
    public function moverse(): string {
        if ($this->vivo) {
            return "{$this->nombre} se está moviendo.";
        }
        return "{$this->nombre} no se puede mover.";
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
               "Color: {$this->color}\n" .
               "Estado: {$estado}\n" .
               "==============================";
    }
}


//instanciar


// Crear un objeto Mamifero
$perro = new Mamifero("Firulais", 3, 15.5, "Marrón");

// Acceder a información
echo $perro->mostrarInfo();

// Usar métodos de comportamiento
echo "\n" . $perro->respirar();
echo "\n" . $perro->comer("croquetas");
echo "\n" . $perro->dormir();
echo "\n" . $perro->moverse();

// Modificar estado
echo "\n\n";
$perro->cumplirAnios();
$perro->aumentarPeso(2.5);

// Usar Getters
echo "\nNombre: " . $perro->getNombre();
echo "\nEdad: " . $perro->getEdad() . " años";
echo "\nPeso: " . $perro->getPeso() . " kg";

// Setter para cambiar nombre
$perro->setNombre("Firulais Jr.");
echo "\nNuevo nombre: " . $perro->getNombre();

?>


