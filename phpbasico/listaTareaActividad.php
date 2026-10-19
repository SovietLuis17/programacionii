<?php
$task1 = ["Limpiar","Cocinar","Abastecer"];
$task2 = ["Practica_PHP","Curso_PHP","Albion"];
$task3 = ["Flayer1","Poster","Nuevo_Diseño"];

$todos = [
    ["task" => $task1, "completed" => false],
    ["task" => $task2, "completed" => false],
    ["task" => $task3, "completed" => false]
];

// Acceder a tareas específicas dentro de cada grupo
echo "<h3>Primera tarea del primer grupo:</h3>";
echo $todos[0]["task"][0];  // ✅ "Limpiar"

echo "<h3>Segunda tarea del segundo grupo:</h3>";
echo $todos[1]["task"][1];  // ✅ "Curso_PHP"

// Total de grupos
echo "<h3>Total de grupos:</h3>";
echo count($todos);  // 3 grupos

// Estatus de la tarea 2 del segundo grupo
echo "<h3>Estatus de la tarea 2 del segundo grupo:</h3>";
echo "Tarea: " . $todos[1]["task"][1] . "<br>";  // ✅ "Curso_PHP"
echo "Completado: " . ($todos[1]["completed"] ? "Sí" : "No") . "<br>";  // ✅ "No"

// Total de tareas individuales
echo "<h3>Total de tareas individuales:</h3>";
$totalTareas = count($todos[0]["task"]) + count($todos[1]["task"]) + count($todos[2]["task"]);
echo $totalTareas;  // 9 tareas
?>