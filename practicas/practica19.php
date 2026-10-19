<?php

/*
📌 Enunciado:
Procesa un arreglo de estudiantes (cada uno con nombre y calificación). Para cada estudiante:
Si calificación ≥ 13 → "✅ [nombre]: APROBADO ([nota])"
Si calificación < 13 → "❌ [nombre]: DESAPROBADO ([nota])"
Al final, muestra:
Total de estudiantes
Promedio general (2 decimales)
"🌟 ¡Todos aprobaron!" si todos tienen ≥ 13
*/


// crear bandera
//$todosAprobaron = false;
$banderaAprobacion = 0;
$aprobaronTodos = null;
$promedio = 0;
$notas = 0;

//arreglo
$estudiantes = [
    ['nombre' => 'Carlos', 'nota' => 15],
    ['nombre' => 'Lucía', 'nota' => 12],
    ['nombre' => 'Miguel', 'nota' => 18]
];

//recorrer arreglo
echo "<h3>------------- CALIFICACIONES  ------------ </h3>";

foreach ($estudiantes as $estudiante) {

  $nombre = $estudiante['nombre'];
  $nota = $estudiante['nota'];

  if ($nota >= 13) {

   echo " $nombre  : ✅ APROBADO   ($nota) <br>";
   $banderaAprobacion++;  
  } 
  else {
    echo " $nombre  : ❌ REPROBADO   ($nota) <br>";
  }
  $notas += $nota;

}

$aprobaronTodos = $banderaAprobacion >= count($estudiantes) ? true : false;

if (!$aprobaronTodos) {
  echo "No aprobaron todos ! <br>";
}
else {
  echo "Aprobaron todos! <BR>";
}

$promedio = $notas / count($estudiantes);

echo " Promedio   : $promedio  <br> ";


// TU CÓDIGO AQUÍ
// Usa: foreach, array_sum(), count(), bandera booleana para "todos aprobaron"
?>