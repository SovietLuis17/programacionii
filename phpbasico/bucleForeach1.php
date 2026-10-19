<?php
$productos = [
    ["nombre" => "Pasta", "precio" => 2.50],
    ["nombre" => "Arroz", "precio" => 1.80],
    ["nombre" => "Enlatado", "precio" => 3.20],
    ["nombre" => "Granos", "precio" => 4.10],
    ["nombre" => "Harina", "precio" => 1.95]
];

echo "<ul>";
foreach ($productos as $p) {
    echo "<li>{$p['nombre']} - {$p['precio']} €</li>";
}
echo "</ul>";
?>