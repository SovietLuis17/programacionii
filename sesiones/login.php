<?php

if (!preg_match("/^[a-zA-Z]{4,10}$/",$_POST['usuario'])) {
   echo "El usuario no coincide con el formato solicitado";
   exit(); //dtener la ejecuccion del programa
}

if (!preg_match("/^[a-zA-Z0-9$%@.-_]{4,30}$/",$_POST['clave'])) {
   echo "El clave no coincide con el formato solicitado";
   exit(); //dtener la ejecuccion del programa
}




if ($_POST['usuario'] == "root" && $_POST['clave'] == "1234") {

    session_name("LOGIN");
    session_start();


    //crear variables de session 
    $_SESSION['Nombre'] = "Luis";
    $_SESSION['Apellido'] = "Oliveros";
    $_SESSION['Pais'] = "Venezuela";

    //echo "<h2> Sesion iniciada </h2>";
   // header("Location: contador.php");// funcion para redireccionar archivos.

    /*⚠️ Regla fundamental
Debe llamarse antes de cualquier salida al navegador: ni echo, ni HTML, 
ni siquiera un espacio en blanco o salto de línea antes de <?php.
 Si ya se envió contenido, PHP mostrará: */

   if(headers_sent()) { // si hay encabaezados enviados devuelve true
       echo "<script> window.location.href='contador.php'; </script>";
   } else {
     header("Location: contador.php");
   }

} else {
  
   //$mensaje = "¡Datos erroneos!!";
  // echo "<script>alert('$mensaje');</script>";
echo "<h2> Datos incorrectos ! </h2> ";
echo '<a href="index.php">Ir a Login</a>';
}



