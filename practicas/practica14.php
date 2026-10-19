<?php
/*
📌 Enunciado:
Filtra los libros que el usuario puede prestar. Un libro es prestable si:
- Está disponible (disponible = true)
- El usuario tiene ≥ 18 años O el libro no es de categoría "adultos"
- La categoría es "novela", "ciencia" O "historia"
*/

$hayLibros = false;

$libros = [
    ['titulo' => 'Cien Años de Soledad', 'categoria' => 'novela', 'disponible' => true],
    ['titulo' => 'Física Cuántica', 'categoria' => 'ciencia', 'disponible' => false],
    ['titulo' => 'Guerra Mundial II', 'categoria' => 'historia', 'disponible' => true],
    ['titulo' => 'Contenido Adulto', 'categoria' => 'adultos', 'disponible' => true],
    ['titulo' => 'Biología Básica', 'categoria' => 'ciencia', 'disponible' => true]
];

$edadUsuario = rand(15, 55);
echo "👤 Edad del usuario: $edadUsuario años\n";
echo "----------------------------------------\n";

// Abrir lista antes del bucle
echo "<ul>\n";

foreach ($libros as $libro) {
    $titulo = $libro['titulo'];
    $disponible = $libro['disponible'];
    $categoria = $libro['categoria'];

    // ✅ Condición 1: Está disponible (booleano, no string)
    $estaDisponible = $disponible === true;

    // ✅ Condición 2: Es prestable por edad
    // - Si NO es adultos → siempre prestable
    // - Si ES adultos → solo si edad ≥ 18
    $esPrestablePorEdad = ($categoria !== 'adultos') || ($edadUsuario >= 18);

    // ✅ Condición 3: Categoría válida
    $categoriaValida = in_array($categoria, ['novela', 'ciencia', 'historia']);

    // ✅ Evaluar todas las condiciones
    if ($estaDisponible && $esPrestablePorEdad && $categoriaValida) {
        echo "  <li><strong>$titulo</strong> - Categoría: $categoria - Disponible: Sí</li>\n";
        $hayLibros = true; // ✅ Solo se activa si hay libro válido
    }
}

// Cerrar lista después del bucle
echo "</ul>\n";

if (!$hayLibros) {
    echo "⚠️ No hay libros que cumplan los criterios de préstamo\n";
}
?>