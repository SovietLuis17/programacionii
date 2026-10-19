<?php
/*
📌 Enunciado:
Valida un perfil de usuario almacenado en un arreglo asociativo. El perfil es VÁLIDO solo si:
edad ≥ 18 Y ≤ 100
email contiene "@" Y "."
roles es un arreglo Y tiene al menos 1 rol
activo es true
*/


$usuario = [
    'nombre' => 'Ana',
    'edad' => 25,
    'email' => 'ana@mail.com',
    'roles' => ['cliente', 'editor'],
    'activo' => true
];

$rangoEdad = $usuario['edad'] >= 18 &&  $usuario['edad'] <= 100;  // true
$roles = count($usuario['roles']) >= 1 ? true : false;  // true
$tieneCorreo = strpos($usuario['email'],'@') ? true : false;  // true
//echo $tieneCorreo;
 
if ($roles && $tieneCorreo && $rangoEdad && $usuario['activo'] === true) {
   echo "El usuario esta perfectamente validado ";
 } 
 else {
    echo "El usuario no esta validado ";
 }

// TU CÓDIGO AQUÍ
// Usa: strpos() para email, is_array(), count(), operadores lógicos
// Salida: "✅ Perfil válido" o "❌ Error: [motivo]"
?>