<?php

//construir en una variable el DSN
$dsn = 'mysql:host=localhost;dbname=pdo_prueba;charset=utf8mb4';

// arreglo de constantes de configuracion
$option = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try { //instanciar la clase PDO

$pdo = new PDO($dsn,'root','',$option);
echo ("Conexion exitosa");

} catch(PDOException $e) {
   die("Error al conectar con la BD ".$e->getMessage());
}

// insertar informacion en nuestra base de datos}

$titulo = "Aprendiendo PDO";
$descripcion = "Aprendemos a insertar en una BD con prepare-execute";

// Insertamos informacion que esta en las variables
$stmt = $pdo->prepare("INSERT INTO notas (titulo,contenido) VALUES(:titulo, :contenido)");
$ok = $stmt->execute([
    'titulo' => $titulo,
    'contenido' => $descripcion
]);

if($ok) {
    echo "<br>Se ha creado un registro con el ID ".$pdo->lastInsertId();
}

//Metodo para hacer consultas simples (query)
$tareas = $pdo->query("SELECT * FROM notas")->fetchAll();
echo "Tareas actuales <br>";
foreach($tareas as $t) {
    echo "[{$t['id']}]   [{$t['titulo']}]   [{$t['contenido']}]  <br>";
}

//UPDATE -ACTUALIZAR - setencias preparas prepare()-execute()-fetchAll / Fecth
$idNota = 2;

$stmt = $pdo->prepare("UPDATE notas SET titulo='Haciendo un UPDATE CON PDO' , contenido='Actualizando un registro' WHERE id= :id");
$stmt->execute(['id' => $idNota]);

echo "<br> Tarea $idNota fue modificada. Filas afectadas :{$stmt->rowCount()} <br> ";

// HACIENDO CONSULTA CON SETENCIA PREPARADA PARA BUSCAR UN REGISTRO ESPECIFICO POR ID
$stmt = $pdo->prepare("SELECT titulo, contenido FROM notas WHERE id = :id");
$stmt->execute(['id' => $idNota]);
$nota = $stmt->fetch();
echo "{$nota['titulo']} |  {$nota['contenido']} ";
