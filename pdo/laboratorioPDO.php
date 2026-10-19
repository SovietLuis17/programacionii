<?php


// 1. CONEXIÓN
$dsn = 'mysql:host=localhost;dbname=prueba_pdo;charset=utf8mb4';

 try {
    $pdo = new PDO($dsn, 'root', '', [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
]);
 } catch (PDOException $e) {
    die("❌ Error conectando a la BD: " . $e->getMessage());
 }



$tareas = [
    ['titulo' => 'Aprender PDO', 'descripcion' => 'Conociendo consultas preparadas'],
    ['titulo' => 'Hacer CRUD', 'descripcion' => 'CRUD con MVC'],
    ['titulo' => 'Entender fetch', 'descripcion' => 'Fetch / FetchAll']
];

// INSERT con marcadores de posicion con nombres :atributo
$stmt = $pdo->prepare("INSERT INTO tareas (titulo, descripcion) VALUES (:titulo, :descripcion)");

// 3. Ejecutamos la consulta por cada tarea, pasando ambos valores a la vez
foreach ($tareas as $tarea) {
    $stmt->execute($tarea);
}

echo "✅ " . $pdo->lastInsertId() . " última ID insertada.<br>";

// 4. SELECT + fetchAll
$tareas = $pdo->query("SELECT * FROM tareas")->fetchAll();
echo "📋 Tareas actuales:\n";
foreach ($tareas as $t) {
    echo "  [{$t['id']}] {$t['titulo']} - " . ($t['descripcion'] ) . "<br>";
}

// 5. UPDATE
$idDescripcion = 1;
$stmt = $pdo->prepare("UPDATE tareas SET descripcion = 'Conociendo la regla de ORO : prepare - excute - fecth/FecthAll' WHERE id = :id");
$stmt->execute(['id' => $idDescripcion]);
echo "<br> ✏️ Tarea #$idDescripcion modificada. Filas afectadas: {$stmt->rowCount()} <br>";

// 6. SELECT + fetch

$stmt = $pdo->prepare('SELECT * FROM tareas WHERE id = :id');
$stmt->execute(['id' => $idDescripcion]);

$tareaEncontrada = $stmt->fetch();

// 4. Verificamos si se encontró algo
if ($tareaEncontrada) {
    echo "Título: " . $tareaEncontrada['titulo'] . "<br>";
    echo "Descripción: " . $tareaEncontrada['descripcion']."<br>";
} else {
    echo "No se encontró ninguna tarea con ese ID.";
}

// 7. DELETE
$idEliminar = 3;
$stmt = $pdo->prepare("DELETE FROM tareas WHERE id = :id");
$stmt->execute(['id' => $idEliminar]);
echo "🗑️ Tarea #$idEliminar eliminada. Filas afectadas: {$stmt->rowCount()} <br>";

// 7. VERIFICAR ESTADO FINAL
$restantes = $pdo->query("SELECT COUNT(*) as total FROM tareas")->fetchColumn();
echo "<br> 📊 Quedan $restantes tarea(s) en la tabla. <br>";

// 8. USAR TRUNCATE 
$sql = "TRUNCATE TABLE tareas";
$pdo->exec($sql);

echo "📂 La tabla se ha vaciado correctamente.";