<?php

//  CONEXIÓN A LA BASE DE DATOS CON PDO


// 1. DSN (Data Source Name) - Dirección de la BD
$dsn = 'mysql:host=localhost;dbname=pdo_prueba;charset=utf8mb4';

// 2. Credenciales
$usuario = 'root';
$password = '';

// 3. Opciones recomendadas (SIEMPRE usar estas)
$opciones = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,  // Lanza excepciones en errores
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,        // Devuelve arrays asociativos
    PDO::ATTR_EMULATE_PREPARES   => false,                   // Sentencias preparadas reales
];

try {
    // Crear la conexión PDO
    $pdo = new PDO($dsn, $usuario, $password, $opciones);
} catch (PDOException $e) {
    // Si falla la conexión, mostrar error y detener
    die(" Error de conexión: " . $e->getMessage());
}

//  PROCESAR FORMULARIO (POST)


$mensajeError = "";
$titulo = "";
$descripcion = "";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    //  Validar campo: título 
    if (empty($_POST['titulo'])) {
        $mensajeError = " El título es necesario.";
        require_once __DIR__.'/../pdo-prueba1/vista.php';
        return;  
    }
    $titulo = trim($_POST['titulo']);
    
    //  Validar campo: descripción
    if (empty($_POST['descripcion'])) {
        $mensajeError = "La descripción es necesaria.";
        require_once __DIR__.'/../pdo-prueba1/vista.php';
        return;
    }
    $descripcion = trim($_POST['descripcion']);
    
    //  Insertar en la base de datos 
    try {
        $stmt = $pdo->prepare("INSERT INTO notas (titulo, contenido) VALUES (:titulo, :contenido)");
        
        $stmt->execute([
            'titulo' => $titulo,
            'contenido' => $descripcion
        ]);
        
         // mostrar mensaje con el ID generado
        $idNuevo = $pdo->lastInsertId();
        echo "<h1>✅ Registro exitoso. ID: " . htmlspecialchars($idNuevo) . "</h1><br>";
        
    } catch (PDOException $e) {
        
        error_log("Error SQL: " . $e->getMessage());
        $mensajeError = "Error al guardar. Intente más tarde.";
        require_once __DIR__.'/../pdo-prueba1/vista.php';
        return;
    }
}


//   MOSTRAR REGISTROS 

echo "<hr><h3> Registros hasta el momento:</h3>";

try {
    //  Consulta para obtener todas las notas
    $stmt = $pdo->prepare("SELECT id, titulo, contenido FROM notas ORDER BY id DESC");
    $stmt->execute();
    $notas = $stmt->fetchAll(); 
    
    // Mostrar cada nota de forma segura
    if (!empty($notas)) {
        foreach ($notas as $nota) {
            // htmlspecialchars previene XSS al mostrar datos del usuario
            $id = htmlspecialchars($nota['id']);
            $titulo = htmlspecialchars($nota['titulo']);
            $contenido = htmlspecialchars($nota['contenido']);
            
            echo "🔹 ID:{$id} | 📌 {$titulo} | 📝 {$contenido} <br>";

      
        }
        
    } else {
        echo "ℹ️ Sin registros encontrados.<br>";
    }
    
} catch (PDOException $e) {
    error_log("Error al cargar notas: " . $e->getMessage());
    echo " No se pudieron mostrar los registros.<br>";
}

//enlace para volver
echo "<br><a href='../pdo-prueba1/vista.php' 
           onclick=\"return confirm('¿Deseas volver al formulario? Se perderán los datos no guardados.')\">
           ⬅️ Volver al formulario
        </a>";



?>