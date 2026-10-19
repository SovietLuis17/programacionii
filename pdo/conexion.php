<?php
// 1. Dirección de la BD (DSN = Data Source Name)
$dsn = 'mysql:host=localhost;dbname=pdo_prueba;charset=utf8mb4';

// 2. Credenciales
$usuario = 'root';
$password = '';

// 3. Opciones que SIEMPRE debes usar al principio
$opciones = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Lanza excepciones en vez de errores silenciosos
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Devuelve ['columna' => 'valor']
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Usa sentencias preparadas REALES del motor
];

try {
    // Crear el objeto PDO
    $pdo = new PDO($dsn, $usuario, $password, $opciones);
    echo "<h1> ✅ Conexión exitosa.</h1>";
} catch (PDOException $e) {
    die("❌ Error conectando a la BD: " . $e->getMessage());
}


// Simulamos datos que vendrían de un formulario
$titulo  = "Nota de prueba";
$contenido  = "Esta es una nota para probar todo sobre la clase PDo";

// 1. PREPARAR: Enviamos la plantilla a la BD con marcadores nombrados
$stmt = $pdo->prepare("INSERT INTO notas (titulo, contenido) VALUES (:titulo, :contenido)");

// 2. EJECUTAR: Enviamos los datos por separado. PDO se encarga de escapar todo.
$ok = $stmt->execute([
    'titulo' => $titulo,
    'contenido'  => $contenido
]);

if ($ok) {
    echo "✅ Creado registro : -. ID: " . $pdo->lastInsertId();
}

echo "------------------------------------------------------- </br>";

// recuperar con fecth all
$stmt = $pdo->prepare("SELECT * FROM notas");
$stmt->execute();

$notas = $stmt->fetchAll(PDO::FETCH_ASSOC); //EL PARAMETRO QUE RECIBE fetchAll es para devolver la info en un arreglo asociativo

// recorrer arreglo 
foreach ($notas as $nota) {
   echo "{$nota['id']} | {$nota['titulo']} | {$nota['contenido']} </br>";
}

