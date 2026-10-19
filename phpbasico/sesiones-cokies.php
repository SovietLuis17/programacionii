<?php
//session 

/*
"Las sesiones guardan información temporal del 
usuario en el servidor, usando una cookie para identificarlo."
*/

session_start(); //iniciamos una sesion
$_SESSION['frutas'] = ['platano', 'fresa'];
//var_dump($_SESSION['frutas']);



// cookie


?>