<?php

//var_dump($_POST);
//echo $_POST['txtNombre'];

/*
foreach($_POST as $key => $value) {
  echo "$key  : $value <br>";
}
*/
/*
foreach($_POST as $key => $value) { 
  if (is_array($value)) {
   
    foreach ($value as $i => $valor) {
      echo "$i  : $valor <br>";
    }

  }
}
*/

echo json_encode([
  'response'=> 'Todo perfecto'
]);

?>