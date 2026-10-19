<?php

class Database {

    public static function conectar() :PDO {
     
    //credenciales de acceso
    $host = '127.0.0.1';
    $db = 'crud_practica1';
    $user = 'root';
    $pass = '';

   // 3. Opciones que SIEMPRE debes usar al principio
    $opciones = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Lanza excepciones en vez de errores silenciosos
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Devuelve ['columna' => 'valor']
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Usa sentencias preparadas REALES del motor
    ];

    //crear objeto PDO
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass,$opciones);
    //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    //$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES , false);
    return $pdo;

    }


}
