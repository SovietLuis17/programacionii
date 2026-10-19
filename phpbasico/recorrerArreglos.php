<?php
/*

FORMAS DE RECORRER ARREGLOS
*/

 $platos = [
    ['nombre' => 'Salmón', 'precio' => 30, 'disponible' => true, 'vegetariano' => false, 'tieneMariscos' => true],
    ['nombre' => 'Ensalada', 'precio' => 15, 'disponible' => true, 'vegetariano' => true, 'tieneMariscos' => false],
    ['nombre' => 'Pasta', 'precio' => 20, 'disponible' => true, 'vegetariano' => false, 'tieneMariscos' => false],
    ['nombre' => 'Sushi', 'precio' => 28, 'disponible' => true, 'vegetariano' => false, 'tieneMariscos' => true],
    ['nombre' => 'Pizza', 'precio' => 22, 'disponible' => false, 'vegetariano' => false, 'tieneMariscos' => false]
 ];



echo "<h2> FORMAS DE RECORRER UN ARREGLO ANIDADO : </h2> <br>";
//--------------------------------

echo "<h3> FORMA 1  : </h3> <br>";


foreach ($platos as $plato) {
    echo "Nombre: " . $plato['nombre'] . "<br>";
    echo "Precio: $" . $plato['precio'] . "<br>";
    echo "Disponible: " . ($plato['disponible'] ? 'Sí' : 'No') . "<br>";
    echo "Vegetariano: " . ($plato['vegetariano'] ? 'Sí' : 'No') . "<br>";
    echo "Tiene mariscos: " . ($plato['tieneMariscos'] ? 'Sí' : 'No') . "<br>";
    echo "<hr>";
}


//-----------------------------------
echo "<h3> FORMA 2  : </h3> <br>";

foreach ($platos as $indice => $plato) {
    echo "Plato #" . ($indice + 1) . ": " . $plato['nombre'] . " - $" . $plato['precio'] . "<br>";
}

//--------------------------
echo "<h3> FORMA 3  : </h3> <br>";

foreach ($platos as $indice => $plato) {
    echo "<h3>Plato #" . ($indice + 1) . "</h3>";
    
    foreach ($plato as $clave => $valor) {
        // Formatear valores booleanos
        if (is_bool($valor)) {
            $valor = $valor ? 'Sí' : 'No';
        }
        
        echo ucfirst($clave) . ": " . $valor . "<br>";
    }
    
    echo "<hr>";
}

//-----------------
echo "<h3> FORMA 4 (USANDO FOR) : </h3> <br>";

$longitud = count($platos);

for ($i = 0; $i < $longitud; $i++) {
    echo $platos[$i]['nombre'] . " - $" . $platos[$i]['precio'] . "<br>";
}

//--------
echo "<h3> FORMA 5 (USANDO WHILE Y OTRAS COSAS) : </h3> <br>";

reset($platos); // Reiniciar puntero del array

while ($plato = current($platos)) {
    echo $plato['nombre'] . " - $" . $plato['precio'] . "<br>";
    next($platos); // Avanzar al siguiente elemento
}


?>