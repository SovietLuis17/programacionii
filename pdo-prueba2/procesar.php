<?php
// 1. Cargar archivo de conexión
require_once 'Database.php';

try {
    // Conectar a la base de datos
    $pdo = Database::conectar();
    
    // Configurar PDO para lanzar excepciones en caso de error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (Exception $e) {
    // Si falla la conexión, registrar y mostrar mensaje
    error_log("Error de conexión: " . $e->getMessage());
    die("Error: No se pudo conectar a la base de datos.");
}

// 2. Procesar el formulario cuando se envía (POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Limpiar y obtener datos del formulario
    $titulo = trim($_POST['titulo'] ?? '');
    $descripcion = trim($_POST['descripcion'] ?? '');
    
    // Validar que los campos no estén vacíos
    if ($titulo === '') {
        $error = "Falta colocar el título.";
        require_once __DIR__ . '/vista.php';
        return;  // ✅ Detiene este archivo y regresa al que lo incluyó
    }
    
    if ($descripcion === '') {
        $error = "Falta colocar la descripción.";
        require_once __DIR__ . '/vista.php';
        return;
    }
    
    // Insertar en la base de datos
    try {
        $sql = "INSERT INTO notas (titulo, contenido) VALUES (:titulo, :contenido)";
        $stmt = $pdo->prepare($sql);  // ✅ Previene inyección SQL
        
        $stmt->execute([
            'titulo' => $titulo,
            'contenido' => $descripcion
        ]);
        
        // Mostrar mensaje de éxito con el ID del nuevo registro
        $idNuevo = $pdo->lastInsertId();
        echo "✅ Registro exitoso. ID: " . htmlspecialchars($idNuevo) . "<br>";
        
    } catch (PDOException $e) {
        // Si falla el INSERT, registrar error y mostrar vista
        error_log("Error SQL: " . $e->getMessage());
        $error = "Error al guardar los datos. Intente más tarde.";
        require_once __DIR__ . '/vista.php';
        return;
    }
}

// 3. Consultar y mostrar las notas (✅ FUERA del bloque POST)
try {
    $stmt = $pdo->prepare("SELECT id, titulo, contenido FROM notas ORDER BY id DESC");
    $stmt->execute();
    $notas = $stmt->fetchAll(PDO::FETCH_ASSOC);  // ✅ Devuelve array asociativo
    
    // Mostrar cada nota en formato simple
    foreach ($notas as $nota) {
        // ✅ htmlspecialchars protege contra XSS al mostrar datos
        $id = htmlspecialchars($nota['id']);
        $titulo = htmlspecialchars($nota['titulo']);
        $contenido = htmlspecialchars($nota['contenido']);
        
        echo "{$id} | {$titulo} | {$contenido} <br>";
    }
    
    if (empty($notas)) {
        echo "Sin registros encontrados.<br>";
    }
    
} catch (PDOException $e) {
    error_log("Error al cargar notas: " . $e->getMessage());
    $error = "Error al mostrar los datos.";
    require_once __DIR__ . '/vista.php';
    return;
}
?>