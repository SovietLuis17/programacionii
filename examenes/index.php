<?php

require_once 'clases.php';

// ==========================================
// 4. SCRIPT DE EJECUCIÓN (index.php)
// ==========================================
$empleados = [
    // Caso con salario inválido
    new EmpleadoTiempoCompleto("Ana López", -500.0, "Ventas", 150.0),
    
    // Caso válido medio tiempo
    new EmpleadoMedioTiempo("Carlos Ruiz", 1200.0, "Soporte", 15),
    
    // Caso válido tiempo completo
    new EmpleadoTiempoCompleto("María Díaz", 2000.0, "RRHH", 300.0),
    
    // Caso con horas inválidas (>20)
    new EmpleadoMedioTiempo("Luis García", 800.0, "Almacén", 25)
];

echo "=== LISTADO DE EMPLEADOS (POLIMORFISMO) ===\n\n";

// 🔑 Polimorfismo en acción: mismo método, comportamiento distinto según el objeto real
foreach ($empleados as $emp) {
    echo $emp->getInfo() . "\n";
}

?>