<?php
/*
📌 Enunciado:
Muestra los platos disponibles considerando:
1. El plato debe estar disponible (disponible = true)
2. El precio debe ser ≤ $25 O el cliente es VIP
3. Si el cliente es vegetariano, solo mostrar platos con vegetariano = true
4. Si el cliente tiene alergia a mariscos, excluir platos con tieneMariscos = true
*/

$hayPlatos = false;

$platos = [
    ['nombre' => 'Salmón', 'precio' => 30, 'disponible' => true, 'vegetariano' => false, 'tieneMariscos' => true],
    ['nombre' => 'Ensalada', 'precio' => 15, 'disponible' => true, 'vegetariano' => true, 'tieneMariscos' => false],
    ['nombre' => 'Pasta', 'precio' => 20, 'disponible' => true, 'vegetariano' => false, 'tieneMariscos' => false],
    ['nombre' => 'Sushi', 'precio' => 28, 'disponible' => true, 'vegetariano' => false, 'tieneMariscos' => true],
    ['nombre' => 'Pizza', 'precio' => 22, 'disponible' => false, 'vegetariano' => false, 'tieneMariscos' => false]
];

$cliente = [
    'esVIP' => false,
    'esVegetariano' => false,
    'alergiaMariscos' => true
];

echo "<ul>\n";

foreach ($platos as $plato) {
    // Extraer valores para mejor legibilidad
    $nombre = $plato['nombre'];
    $disponible = $plato['disponible'];
    $precio = $plato['precio'];
    $vegetariano = $plato['vegetariano'];
    $tieneMariscos = $plato['tieneMariscos'];
    
    // ✅ Condición 1: Debe estar disponible
    $esDisponible = $disponible;
    
    // ✅ Condición 2: Precio ≤ 25 O cliente es VIP
    $cumplePrecio = ($precio <= 25) || $cliente['esVIP'];
    
    // ✅ Condición 3: Si es vegetariano, solo platos vegetarianos
    // Lógica: "NO es vegetariano OR el plato es vegetariano"
    $cumpleVegetariano = !$cliente['esVegetariano'] || $vegetariano;
    
    // ✅ Condición 4: Si tiene alergia, excluir mariscos
    // Lógica: "NO tiene alergia OR el plato NO tiene mariscos"
    $cumpleAlergia = !$cliente['alergiaMariscos'] || !$tieneMariscos;
    
    // ✅ Todas las condiciones deben cumplirse (AND)
    if ($esDisponible && $cumplePrecio && $cumpleVegetariano && $cumpleAlergia) {
        echo "  <li><strong>$nombre</strong> - Precio: \$$precio</li>\n";
        $hayPlatos = true;
    }
}

echo "</ul>\n";

if (!$hayPlatos) {
    echo "⚠️ No hay platos que cumplan los criterios\n";
}
?>