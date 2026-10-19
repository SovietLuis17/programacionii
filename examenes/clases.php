<?php
//declare(strict_types=1);

// ==========================================
// 1. CLASE BASE: Empleado
// ==========================================
class Empleado {
    protected string $nombre;
    protected float $salarioBase;
    protected string $departamento;

    public function __construct(string $nombre, float $salarioBase, string $departamento) {
        // Validación sin excepciones
        if ($salarioBase <= 0) {
            $this->salarioBase = 0.0;
            echo "⚠️ Salario inválido. Se asignó 0.0 <br>";
        } else {
            $this->salarioBase = $salarioBase;
        }
        
        $this->nombre = $nombre;
        $this->departamento = $departamento;
    }

    public function getInfo(): string {
        return "Empleado: {$this->nombre} | Dpto: {$this->departamento} | Salario: \$" . number_format($this->salarioBase, 2);
    }
}

// ==========================================
// 2. CLASE HIJA: EmpleadoTiempoCompleto
// ==========================================
class EmpleadoTiempoCompleto extends Empleado {
    protected float $bonoMensual;

    public function __construct(string $nombre, float $salarioBase, string $departamento, float $bonoMensual) {
        // 🔑 PUNTOS CLAVE EVALUADOS:
        // 1. Llamada a parent::__construct() SIEMPRE al inicio
        parent::__construct($nombre, $salarioBase, $departamento);
        
        // 2. Validación propia de la clase hija
        if ($bonoMensual < 0) {
            $this->bonoMensual = 0.0;
            echo "⚠️ Bono inválido. Se asignó 0.0 <br>";
        } else {
            $this->bonoMensual = $bonoMensual;
        }
    }

    // 🔑 Polimorfismo: Sobrescritura del método getInfo()
    public function getInfo(): string {
        $total = $this->salarioBase + $this->bonoMensual;
        $base = parent::getInfo(); // Reutiliza formato base
        return "{$base} | Bono: \$" . number_format($this->bonoMensual, 2) . " | Total: \$" . number_format($total, 2);
    }
}

// ==========================================
// 3. CLASE HIJA: EmpleadoMedioTiempo
// ==========================================
class EmpleadoMedioTiempo extends Empleado {
    protected int $horasSemanales;

    public function __construct(string $nombre, float $salarioBase, string $departamento, int $horasSemanales) {
        parent::__construct($nombre, $salarioBase, $departamento);
        
        if ($horasSemanales < 1 || $horasSemanales > 20) {
            $this->horasSemanales = 0;
            echo "⚠️ Horas inválidas. Se asignó 0  <br>";
        } else {
            $this->horasSemanales = $horasSemanales;
        }
    }

    public function getInfo(): string {
        $base = parent::getInfo();
        return "{$base} | Horas/Semana: {$this->horasSemanales}  <br>";
    }
}

