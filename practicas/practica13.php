<?php
$productos = [
    ['nombre' => 'Audífonos', 'precio' => 45, 'stock' => 10, 'categoria' => 'electro'],
    ['nombre' => 'Lámpara', 'precio' => 30, 'stock' => 0, 'categoria' => 'hogar'],
    ['nombre' => 'Mouse', 'precio' => 25, 'stock' => 15, 'categoria' => 'computo'],
    ['nombre' => 'Toalla', 'precio' => 20, 'stock' => 8, 'categoria' => 'hogar']
];

// ===== SOLUCIÓN PASO A PASO =====

echo "✅ Productos disponibles:\n";
echo "----------------------------------------\n";

// Bandera para saber si encontramos al menos un producto
$hayProductos = false;

// Recorrer cada producto del arreglo
foreach ($productos as $producto) {
    
    // Extraer datos del producto (opcional, para mejor legibilidad)
    $nombre = $producto['nombre'];
    $precio = $producto['precio'];
    $stock = $producto['stock'];
    $categoria = $producto['categoria'];
    
    // ===== CONDICIÓN DE FILTRO =====
    // Usamos && para "TODAS" las condiciones
    // Usamos || para "AL MENOS UNA" de las categorías
    
    $cumplePrecio = ($precio <= 50);
    $cumpleStock = ($stock > 0);
    $cumpleCategoria = ($categoria === 'electro' || $categoria === 'hogar');
    
    // Combinar todas las condiciones
    if ($cumplePrecio && $cumpleStock && $cumpleCategoria) {
        
        // Mostrar el producto que cumple
        echo "- $nombre (\$$precio) | Stock: $stock | Categoría: $categoria\n";
        
        $hayProductos = true;
    }
}

// Mensaje si no hay productos que cumplan
if (!$hayProductos) {
    echo "⚠️ No hay productos que cumplan los criterios\n";
}

echo "----------------------------------------\n";
?>