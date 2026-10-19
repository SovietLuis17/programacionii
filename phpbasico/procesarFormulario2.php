<?php

//var_dump($_FILES);

//var_dump($_FILES['archivo']['name']);


foreach ($_FILES['archivo']['name'] as $indice => $valor) {
    echo "$indice    : $valor  ";
}

/*
if (isset($_FILES['archivo'])) {
  move_uploaded_file(
    $_FILES['archivo']['tmp_name'],
    'multimedia/'.$_FILES['archivo']['name']
    );
}
*/

if(isset($_FILES['archivo'])){
  foreach ($_FILES['archivo']['name'] as $k => $archivo) {
    if(!empty($archivo)) {
      move_uploaded_file(
    $_FILES['archivo']['tmp_name'][$k],
    'multimedia/'.$archivo
    );
    }
  }

}
?>