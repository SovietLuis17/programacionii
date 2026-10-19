<?php
  // para trabajar en lam isma session se dbe colocar nuevamnete todo
  
    session_name("LOGIN");
    session_start();

    //eliminar sesion, borra todo variables de sesion e ID
    session_destroy();

    //echo "<script> window.location.href='index.php'; </script>";
      if(headers_sent()) { // si hay encabaezados enviados devuelve true
       echo "<script> window.location.href='index.php'; </script>";
   } else {
     header("Location: index.php");
   }

    //con esto solo se elimina las variables de sesion
    //session_unset();
